<?php

namespace App\Http\Controllers\API\V1\Shared\Conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConversationController extends Controller
{
    public function index()
    {
        // $user = currUserHelper();

        // // استخدام join query لجلب البيانات ذات الصلة في استعلام واحد
        // $conversations = Conversation::select([
        //     'conversations.*',
        //     'customer.name as customer_name',
        //     'vendor.name as vendor_name',
        //     'request_customers.id as request_id'
        // ])
        //     ->join('users as customer', 'conversations.user_id', '=', 'customer.id')
        //     ->join('users as vendor', 'conversations.vendor_id', '=', 'vendor.id')
        //     ->join('request_customers', 'conversations.request_id', '=', 'request_customers.id')
        //     ->where(function ($query) use ($user) {
        //         $query->where('conversations.user_id', $user->id)
        //             ->orWhere('conversations.vendor_id', $user->id);
        //     })
        //     ->get();



        // return buildApiResponseHelper(true, 'تم التحميل بنجاح', $conversations);
    }

    public function getUserConversations(Request $request)
    {
        $userId = getCurrUserIdHelper();
        $conversations = Conversation::join('users', 'conversations.vendor_id', '=', 'users.id')
            ->where('conversations.user_id', $userId)
            ->select(
                'conversations.id',
                'conversations.request_id',
                'conversations.response_id',
                'conversations.vendor_id',
                'users.name as receiver_name',
                'users.logo as receiver_logo',
            )
            ->orderBy('conversations.id', 'desc')
            ->paginate(10);

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
    }

    public function getVendorConversations(Request $request)
    {
        $userId = getCurrUserIdHelper();
        $conversations = Conversation::join('users', 'conversations.user_id', '=', 'users.id')
            ->where('conversations.vendor_id', $userId)
            ->select(
                'conversations.id',
                'conversations.request_id',
                'conversations.response_id',
                'conversations.vendor_id',
                'users.name as receiver_name',
                'users.logo as receiver_logo',
            )
            ->orderBy('conversations.id', 'desc')
            ->paginate(10);

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'requestId' => 'required|exists:request_customers,id',
            'responseId' => 'required|integer',
            'vendorId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $requestCustomer = \App\Models\RequestCustomer::find($request->requestId);
        $customerUserId = $requestCustomer ? $requestCustomer->user_id : getCurrUserIdHelper();

        $vendorUserId = Vendor::where('id', $request->vendorId)->value('user_id');
        if (!$vendorUserId) {
            $vendorUserId = $request->vendorId;
        }

        // البحث عن محادثة موجودة أو إنشاء جديدة
        $conversation = Conversation::where('vendor_id', $vendorUserId)
            ->where('user_id', $customerUserId)
            ->where('request_id', $request->requestId)
            ->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'vendor_id' => $vendorUserId,
                'user_id' => $customerUserId,
                'request_id' => $request->requestId,
                'response_id' => $request->responseId,
            ]);
        }

        return $conversation ? buildApiResponseHelper(true, 'تمت العملية بنجاح', ['conversationId' => $conversation->id]) : buildApiResponseHelper(false, 'حدث خطأ');
    }
}
