<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
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

        // 1. Unread Customer Requests (For Vendors)
        $customerRequestsCount = $user->unreadNotifications()
            ->where(function ($query) {
                $query->where('data->category', 'customer_requests')
                    ->orWhere('type', 'like', '%new_request%');
            })
            ->count();

        // 2. Unread Company Responses (For Customers)
        $companyResponsesCount = $user->unreadNotifications()
            ->where(function ($query) {
                $query->where('data->category', 'company_responses')
                    ->orWhere('type', 'like', '%response%');
            })
            ->count();

        // 3. Unread Conversations (For both Users & Vendors)
        $userConversationIds = Conversation::where('user_id', $userId)
            ->orWhere('vendor_id', $userId)
            ->pluck('id');

        $conversationsCount = MessageConversation::whereIn('conversation_id', $userConversationIds)
            ->where('sender_id', '!=', $userId)
            ->where('read', false)
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
            $user->unreadNotifications()
                ->where(function ($query) use ($category) {
                    $query->where('data->category', $category)
                        ->orWhere('type', 'like', '%' . ($category === 'customer_requests' ? 'new_request' : 'response') . '%');
                })
                ->update(['read_at' => now()]);
        } elseif ($category === 'conversations') {
            $userConversationIds = Conversation::where('user_id', $userId)
                ->orWhere('vendor_id', $userId)
                ->pluck('id');

            MessageConversation::whereIn('conversation_id', $userConversationIds)
                ->where('sender_id', '!=', $userId)
                ->where('read', false)
                ->update(['read' => true]);
        }

        return $this->unreadCounts($request);
    }
}
