<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Models\Vendor;
use Illuminate\Http\Request;

class NotificationBadgeController extends Controller
{
    /**
     * Get unread notification counts grouped by section/category.
     */
    public function unreadCounts(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated'
            ], 401);
        }

        $userId = $user->id;
        $isVendor = Vendor::where('user_id', $userId)->exists();

        // Total unread DB notifications
        $totalUnreadNotifications = $user->unreadNotifications()->count();

        // 1. Unread Customer Requests (For Vendors)
        $customerRequestsCount = $user->unreadNotifications()
            ->where(function ($query) {
                $query->where('data->category', 'customer_requests')
                    ->orWhere('data->title', 'like', '%طلب%')
                    ->orWhere('data->body', 'like', '%طلب%');
            })
            ->count();

        if ($customerRequestsCount === 0 && $isVendor && $totalUnreadNotifications > 0) {
            $customerRequestsCount = $totalUnreadNotifications;
        }

        // 2. Unread Company Responses (For Customers)
        $companyResponsesCount = $user->unreadNotifications()
            ->where(function ($query) {
                $query->where('data->category', 'company_responses')
                    ->orWhere('data->title', 'like', '%رد%')
                    ->orWhere('data->body', 'like', '%رد%');
            })
            ->count();

        if ($companyResponsesCount === 0 && !$isVendor && $totalUnreadNotifications > 0) {
            $companyResponsesCount = $totalUnreadNotifications;
        }

        // 3. Unread Conversations (For both Users & Vendors)
        $userConversationIds = Conversation::where('user_id', $userId)
            ->orWhere('vendor_id', $userId)
            ->pluck('id');

        $conversationsCount = MessageConversation::whereIn('conversation_id', $userConversationIds)
            ->where('sender_id', '!=', $userId)
            ->where(function ($q) {
                $q->where('read', false)->orWhereNull('read')->orWhere('read', 0);
            })
            ->count();

        return response()->json([
            'success' => true,
            'data' => [
                'customer_requests' => $customerRequestsCount,
                'company_responses' => $companyResponsesCount,
                'conversations' => $conversationsCount,
            ]
        ]);
    }

    /**
     * Mark notifications for a specific category/section as read.
     */
    public function markCategoryRead(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
        }

        $category = $request->input('category');
        $userId = $user->id;

        if ($category === 'customer_requests' || $category === 'company_responses') {
            $user->unreadNotifications()->update(['read_at' => now()]);
        } elseif ($category === 'conversations') {
            $userConversationIds = Conversation::where('user_id', $userId)
                ->orWhere('vendor_id', $userId)
                ->pluck('id');

            MessageConversation::whereIn('conversation_id', $userConversationIds)
                ->where('sender_id', '!=', $userId)
                ->update(['read' => true]);

            $user->unreadNotifications()
                ->where(function ($query) {
                    $query->where('data->category', 'conversations')
                        ->orWhere('data->title', 'like', '%رسالة%')
                        ->orWhere('data->body', 'like', '%رسالة%');
                })
                ->update(['read_at' => now()]);
        }

        return $this->unreadCounts($request);
    }
}
