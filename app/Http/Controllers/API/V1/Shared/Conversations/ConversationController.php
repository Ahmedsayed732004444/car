<?php

namespace App\Http\Controllers\API\V1\Shared\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Models\RequestCustomer;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    public function index()
    {
    }

    private function fixVendorConversationIds()
    {
        try {
            Vendor::whereNotNull('user_id')->where('user_id', '>', 0)->get()->each(function ($v) {
                Conversation::where('vendor_id', $v->id)->update(['vendor_id' => $v->user_id]);
            });
        } catch (\Throwable $e) {
        }
    }

    public function getUserConversations(Request $request)
    {
        $this->fixVendorConversationIds();
        $userId = getCurrUserIdHelper();

        $rawConversations = Conversation::where('user_id', $userId)
            ->latest('id')
            ->get()
            ->unique('request_id');

        $conversationIds = $rawConversations->pluck('id')->toArray();

        $conversations = Conversation::whereIn('id', $conversationIds)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $conversations->getCollection()->transform(function ($item) {
            $vendor = Vendor::where('user_id', $item->vendor_id)
                ->orWhere('id', $item->vendor_id)
                ->first();

            $vendorUser = null;
            if ($vendor && $vendor->user_id) {
                $vendorUser = \App\Models\User::find($vendor->user_id);
            }
            if (!$vendorUser) {
                $vendorUser = \App\Models\User::find($item->vendor_id);
            }

            $name = null;
            if ($vendor && !empty($vendor->company_name_ar) && $vendor->company_name_ar !== 'التاجر') {
                $name = $vendor->company_name_ar;
            } elseif ($vendorUser && !empty($vendorUser->name) && $vendorUser->name !== 'التاجر') {
                $name = $vendorUser->name;
            }

            $logo = $vendorUser?->logo ?: ($vendor?->logo ?: null);

            $item->receiver_name = $name ?: 'التاجر';
            $item->receiver_logo = $logo;

            return $item;
        });

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
    }

    public function getVendorConversations(Request $request)
    {
        $this->fixVendorConversationIds();
        $userId = getCurrUserIdHelper();
        $vendorTableId = Vendor::where('user_id', $userId)->value('id');

        $rawConversations = Conversation::where(function ($query) use ($userId, $vendorTableId) {
                $query->where('vendor_id', $userId);
                if ($vendorTableId) {
                    $query->orWhere('vendor_id', $vendorTableId);
                }
            })
            ->latest('id')
            ->get()
            ->unique('request_id');

        $conversationIds = $rawConversations->pluck('id')->toArray();

        $conversations = Conversation::whereIn('id', $conversationIds)
            ->orderBy('id', 'desc')
            ->paginate(10);

        $conversations->getCollection()->transform(function ($item) {
            $customerUser = \App\Models\User::find($item->user_id);

            $item->receiver_name = ($customerUser && !empty($customerUser->name) && $customerUser->name !== 'التاجر') 
                ? $customerUser->name 
                : 'العميل';
            $item->receiver_logo = $customerUser?->logo;

            return $item;
        });

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'requestId' => 'required|integer',
            'responseId' => 'nullable|integer',
            'vendorId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $this->fixVendorConversationIds();

        $requestCustomer = RequestCustomer::find($request->requestId);
        $rawVendorId = $request->vendorId;
        $vendorUserId = Vendor::where('id', $rawVendorId)->value('user_id') ?: $rawVendorId;
        $vendorTableId = Vendor::where('user_id', $vendorUserId)->value('id') ?: $rawVendorId;

        $currentUserId = getCurrUserIdHelper();

        if ($requestCustomer && $requestCustomer->user_id) {
            $customerUserId = $requestCustomer->user_id;
        } else {
            $customerUserId = ($currentUserId != $vendorUserId && $currentUserId != $vendorTableId) ? $currentUserId : 0;
        }

        // البحث عن أي محادثة سابقة مرتبطة بنفس الطلب وتحديثها
        $conversation = Conversation::where('request_id', $request->requestId)
            ->where(function ($q) use ($vendorUserId, $vendorTableId, $rawVendorId) {
                $q->where('vendor_id', $vendorUserId)
                    ->orWhere('vendor_id', $vendorTableId)
                    ->orWhere('vendor_id', $rawVendorId);
            })
            ->latest('id')
            ->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'vendor_id' => $vendorUserId,
                'user_id' => $customerUserId,
                'request_id' => $request->requestId,
                'response_id' => $request->responseId ?? 0,
            ]);
        } else {
            $updateData = ['vendor_id' => $vendorUserId];
            if ($customerUserId > 0) {
                $updateData['user_id'] = $customerUserId;
            }
            $conversation->update($updateData);
        }

        // تنظيف المحادثات المكررة للطلب
        Conversation::where('request_id', $request->requestId)
            ->where('id', '!=', $conversation->id)
            ->delete();

        return $conversation ? buildApiResponseHelper(true, 'تمت العملية بنجاح', ['conversationId' => $conversation->id]) : buildApiResponseHelper(false, 'حدث خطأ');
    }
}
