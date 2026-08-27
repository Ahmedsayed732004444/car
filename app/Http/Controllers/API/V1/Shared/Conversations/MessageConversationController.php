<?php

namespace App\Http\Controllers\API\V1\Shared\Conversations;

use App\Http\Controllers\Controller;
use App\Http\Services\Shared\ShippingService;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Traits\NotificationsTrait;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MessageConversationController extends Controller
{
    use NotificationsTrait;

    public function __construct(protected ShippingService $shippingService) {}

    public function index(Request $request, $conversationId)
    {
        $lastId = $request->query('last_message_id', 0);

        $messages = MessageConversation::where('conversation_id', $conversationId)
            ->where('id', '>', $lastId)
            ->select(
                'id',
                'sender_id',
                'body',
                'image',
                'is_shipping_request',
                'created_at as date_sent',
            )
            ->orderBy('id', 'asc')
            ->get();

        return buildApiResponseHelper(true, 'تم ارسال الرسالة بنجاح', $messages);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'conversationId' => 'required|exists:conversations,id',
            'requestId' => 'required|integer',
            'responseId' => 'required|integer',
            'body' => 'nullable|string',
            'isSendShippingRequest' => 'nullable|boolean',
            'shippingInfo' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,webp|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $userId = getCurrUserIdHelper();
        $receiverId = Conversation::getReceiverId($request->conversationId, $userId);

        $fileName = UploadUtils::uploadImageToStorage($request->image);

        $created = MessageConversation::create([
            'conversation_id' => $request->conversationId,
            'sender_id' => $userId,
            'body' => $request->body,
            'is_shipping_request' => $request->isSendShippingRequest,
            'image' => $fileName
        ]);


        if ($created) {
            $messagesNotify =  'رسالة جديدة من الطلب رقم' . ' ( ' . $request->requestId . ' )';
            if ($request->shippingInfo != null && $request->isSendShippingRequest == true && $request->shippingInfo != '') {
                $shippingInfo = json_decode($request->shippingInfo, true);
                $this->shippingService->storeShippingRequest(
                    requestId: $request->requestId,
                    responseId: $request->responseId,
                    orderNumber: 'REQ-' . $request->requestId . '-RES-' . $request->responseId . '-MSG-' . $created->id,
                    nameOriginVendor: $shippingInfo['name'] ?? null,
                    cityOriginVendor: $shippingInfo['city'] ?? 'مدينة غير محددة',
                    addressOriginVendor: $shippingInfo['address'],
                    latOriginVendor: isset($shippingInfo['lat']) ? (float) $shippingInfo['lat'] : null,
                    lngOriginVendor: isset($shippingInfo['lng']) ? (float) $shippingInfo['lng'] : null,
                    phoneOriginVendor: $shippingInfo['phone'],
                    length: $shippingInfo['length'],
                    width: $shippingInfo['width'],
                    height: $shippingInfo['height'],
                    weight: $shippingInfo['weight']
                );
                $messagesNotify =  'طلب شحن جديد من الطلب رقم' . ' ( ' . $request->requestId . ' )';
            }

            $this->notifyByID(
                userId: $receiverId,
                title: $messagesNotify,
                body: $request->body,
                notifyDB: false,
                category: 'conversations',
                extraData: [
                    'conversation_id' => (string) $request->conversationId,
                    'message_id' => (string) $created->id,
                    'sender_id' => (string) $userId,
                    'body' => (string) ($request->body ?? ''),
                    'image' => (string) ($fileName ?? ''),
                    'is_shipping_request' => $request->isSendShippingRequest ? '1' : '0',
                ]
            );
        }

        return buildApiResponseHelper(true, 'تم ارسال الرسالة بنجاح');
    }
}
