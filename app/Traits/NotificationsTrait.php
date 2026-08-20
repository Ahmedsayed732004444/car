<?php

namespace App\Traits;

use App\Enums\user\UserRoleEnum;
use App\Utils\FcmNotificationUtils;
use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Http\Request;

trait NotificationsTrait
{

    public function notifyToAdmin($title, $body)
    {
        $admins = User::role([UserRoleEnum::Super_Admin->value, UserRoleEnum::Admin->value], 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new SendNotification(title: $title, body: $body));
        }
    }

    public function notifyRequestToEligibleVendors($vendors, $requestId = null)
    {
        foreach ($vendors as $vendor) {
            $user = User::where('id', $vendor->user_id)->first(['id', 'fcm_token']);
            if ($user) {
                $user->notify(new SendNotification(title: 'طلب جديد', body: 'تم اضافة طلب جديد', category: 'customer_requests', targetId: $requestId));
                (new FcmNotificationUtils())->setTitle('طلب جديد')->setBody('تم اضافة طلب جديد')->setCategory('customer_requests')->setToken($user->fcm_token)->send();
            }
        }
    }

    public function notifyByID($userId, $title, $body, $notifyDB = true, $category = 'conversations', $targetId = null, array $extraData = [])
    {
        $user = User::where('id', $userId)->first(['id', 'fcm_token']);
        if ($user) {
            if ($notifyDB) {
                $user->notify(new SendNotification(title: $title, body: $body, category: $category, targetId: $targetId));
            }
            (new FcmNotificationUtils())
                ->setTitle($title)
                ->setBody($body)
                ->setCategory($category)
                ->setExtraData($extraData)
                ->setToken($user->fcm_token)
                ->send();
        }
    }

    public function getNotifications(Request $request)
    {
        $user = currUserHelper();
        $notifications = $user->notifications()
            ->select('id', 'data', 'created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $notifications->getCollection()->transform(function ($item) {
            $data = $item->data;

            return [
                'id' => $item->id,
                'title' => $data['title'] ?? null,
                'body' => $data['body'] ?? null,
                'created_at' => $item->created_at->format('Y-m-d H:i'),
            ];
        });

        // return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
        //     'current_page' => $result->currentPage(),
        //     'last_page' => $result->lastPage(),
        //     'data' => $result->items(),
        // ]);

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
            'current_page' => $notifications->currentPage(),
            'last_page' => $notifications->lastPage(),
            'total' => $notifications->total(),
            'per_page' => $notifications->perPage(),
            'data' => $notifications->items(),
        ]);
    }
}
