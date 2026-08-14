<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\MessageConversation;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NotificationBadgeController extends Controller
{
    /**
     * Get unread notification counts grouped by section and per-entity.
     */
    public function unreadCounts(Request $request)
    {
        try {
            $user = $request->user();
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthenticated'
                ], 401);
            }

            $userId = $user->id;
            $isVendor = Vendor::where('user_id', $userId)->exists();

            // Fetch unread notifications collection safely
            $unreadNotifications = $user->unreadNotifications()->get();
            $totalUnreadNotifications = $unreadNotifications->count();

            // 1. Unread Customer Requests (For Vendors)
            $customerRequestsCount = $unreadNotifications->filter(function ($item) {
                $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
                $category = (string)($data['category'] ?? '');
                $title = (string)($data['title'] ?? '');
                $body = (string)($data['body'] ?? '');
                return $category === 'customer_requests' || str_contains($title, 'طلب') || str_contains($body, 'طلب');
            })->count();

            if ($customerRequestsCount === 0 && $isVendor && $totalUnreadNotifications > 0) {
                $customerRequestsCount = $totalUnreadNotifications;
            }

            // 2. Unread Company Responses (For Customers)
            $companyResponsesCount = $unreadNotifications->filter(function ($item) {
                $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
                $category = (string)($data['category'] ?? '');
                $title = (string)($data['title'] ?? '');
                $body = (string)($data['body'] ?? '');
                return $category === 'company_responses' || str_contains($title, 'رد') || str_contains($body, 'رد');
            })->count();

            if ($companyResponsesCount === 0 && !$isVendor && $totalUnreadNotifications > 0) {
                $companyResponsesCount = $totalUnreadNotifications;
            }

            // 3. Unread Conversations (For both Users & Vendors)
            $userConversationIds = Conversation::where('user_id', $userId)
                ->orWhere('vendor_id', $userId)
                ->pluck('id');

            $conversationsCount = 0;
            $conversationEntityCounts = [];

            if ($userConversationIds->isNotEmpty()) {
                $rawCounts = MessageConversation::whereIn('conversation_id', $userConversationIds)
                    ->where('sender_id', '!=', $userId)
                    ->where(function ($q) {
                        $q->where('read', 0)->orWhere('read', false)->orWhereNull('read');
                    })
                    ->select('conversation_id', DB::raw('count(*) as count'))
                    ->groupBy('conversation_id')
                    ->get();

                foreach ($rawCounts as $row) {
                    $conversationEntityCounts[(string)$row->conversation_id] = (int)$row->count;
                    $conversationsCount += (int)$row->count;
                }
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'customer_requests' => (int)$customerRequestsCount,
                    'company_responses' => (int)$companyResponsesCount,
                    'conversations' => (int)$conversationsCount,
                    'sections' => [
                        'customer_requests' => (int)$customerRequestsCount,
                        'company_responses' => (int)$companyResponsesCount,
                        'conversations' => (int)$conversationsCount,
                    ],
                    'entities' => [
                        'conversations' => $conversationEntityCounts,
                        'customer_requests' => new \stdClass(),
                        'company_responses' => new \stdClass(),
                    ]
                ]
            ]);
        } catch (\Throwable $e) {
            Log::error("[NotificationBadgeController] unreadCounts ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
            ], 500);
        }
    }

    /**
     * Mark a specific entity (e.g. conversation_id) as read.
     */
    public function markEntityRead(Request $request)
    {
        try {
            $user = $request->user();
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
            }

            $section = $request->input('section');
            $entityId = $request->input('entity_id');
            $userId = $user->id;

            if ($section === 'conversations' && $entityId) {
                MessageConversation::where('conversation_id', $entityId)
                    ->where('sender_id', '!=', $userId)
                    ->update(['read' => 1]);
            } elseif ($section === 'customer_requests' || $section === 'company_responses') {
                DB::table('notifications')
                    ->where('notifiable_type', get_class($user))
                    ->where('notifiable_id', $userId)
                    ->whereNull('read_at')
                    ->update(['read_at' => now()]);
            }

            return $this->unreadCounts($request);
        } catch (\Throwable $e) {
            Log::error("[NotificationBadgeController] markEntityRead ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
            ], 500);
        }
    }

    /**
     * Mark notifications for a specific category/section as read.
     */
    public function markCategoryRead(Request $request)
    {
        try {
            $user = $request->user();
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
            }

            $category = $request->input('category');
            $userId = $user->id;

            // Direct DB update for notifications
            DB::table('notifications')
                ->where('notifiable_type', get_class($user))
                ->where('notifiable_id', $userId)
                ->whereNull('read_at')
                ->update(['read_at' => now()]);

            // Direct DB update for conversations messages
            if ($category === 'conversations') {
                $userConversationIds = Conversation::where('user_id', $userId)
                    ->orWhere('vendor_id', $userId)
                    ->pluck('id');

                if ($userConversationIds->isNotEmpty()) {
                    MessageConversation::whereIn('conversation_id', $userConversationIds)
                        ->where('sender_id', '!=', $userId)
                        ->update(['read' => 1]);
                }
            }

            return $this->unreadCounts($request);
        } catch (\Throwable $e) {
            Log::error("[NotificationBadgeController] markCategoryRead ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
            ], 500);
        }
    }
}
