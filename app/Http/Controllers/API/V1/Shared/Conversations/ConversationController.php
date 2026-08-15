<?php

namespace App\Http\Controllers\API\V1\Shared\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    public function index()
    {
    }

    public function getUserConversations(Request $request)
    {
        $userId = getCurrUserIdHelper();
        $conversations = Conversation::leftJoin('vendors', function($join) {
                $join->on('conversations.vendor_id', '=', 'vendors.id')
                     ->orOn('conversations.vendor_id', '=', 'vendors.user_id');
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'conversations.vendor_id')
                     ->orOn('users.id', '=', 'vendors.user_id');
            })
            ->where('conversations.user_id', $userId)
            ->select([
                'conversations.id',
                'conversations.request_id',
                'conversations.response_id',
                'conversations.vendor_id',
                DB::raw('COALESCE(NULLIF(vendors.company_name_ar, ""), users.name, "التاجر") as receiver_name'),
                'users.logo as receiver_logo',
            ])
            ->distinct()
            ->orderBy('conversations.id', 'desc')
            ->paginate(10);

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
    }

    public function getVendorConversations(Request $request)
    {
        $userId = getCurrUserIdHelper();
        $vendorTableId = Vendor::where('user_id', $userId)->value('id');

        $conversations = Conversation::join('users', 'conversations.user_id', '=', 'users.id')
            ->where(function ($query) use ($userId, $vendorTableId) {
                $query->where('conversations.vendor_id', $userId);
                if ($vendorTableId) {
                    $query->orWhere('conversations.vendor_id', $vendorTableId);
                }
            })
            ->select([
                'conversations.id',
                'conversations.request_id',
                'conversations.response_id',
                'conversations.vendor_id',
                'users.name as receiver_name',
                'users.logo as receiver_logo',
            ])
            ->orderBy('conversations.id', 'desc')
            ->paginate(10);

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

        $requestCustomer = \App\Models\RequestCustomer::find($request->requestId);
        $customerUserId = $requestCustomer ? $requestCustomer->user_id : getCurrUserIdHelper();

        $rawVendorId = $request->vendorId;
        $vendorUserId = Vendor::where('id', $rawVendorId)->value('user_id') ?: $rawVendorId;
        $vendorTableId = Vendor::where('user_id', $vendorUserId)->value('id') ?: $rawVendorId;

        // البحث عن أي محادثة سابقة مرتبطة بنفس الطلب وتوحيدها
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
            $conversation->update([
                'vendor_id' => $vendorUserId,
                'user_id' => $customerUserId,
            ]);
        }

        return $conversation ? buildApiResponseHelper(true, 'تمت العملية بنجاح', ['conversationId' => $conversation->id]) : buildApiResponseHelper(false, 'حدث خطأ');
    }
}
