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

            // 1. Unread Customer Requests (For Vendors)
            $customerRequestsCount = 0;
            $customerRequestsEntityCounts = [];

            // 2. Unread Company Responses (For Customers)
            $companyResponsesCount = 0;
            $companyResponsesEntityCounts = [];

            foreach ($unreadNotifications as $item) {
                $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
                $category = (string)($data['category'] ?? '');
                $title = (string)($data['title'] ?? '');
                $body = (string)($data['body'] ?? '');
                $targetId = (string)($data['target_id'] ?? $data['entity_id'] ?? $data['request_id'] ?? '');

                if ($category === 'company_responses' || str_contains($title, 'رد') || str_contains($body, 'الرد')) {
                    $companyResponsesCount++;
                    if ($targetId !== '') {
                        $companyResponsesEntityCounts[$targetId] = ($companyResponsesEntityCounts[$targetId] ?? 0) + 1;
                    }
                } elseif ($category === 'customer_requests' || str_contains($title, 'طلب جديد') || str_contains($body, 'طلب جديد')) {
                    $customerRequestsCount++;
                    if ($targetId !== '') {
                        $customerRequestsEntityCounts[$targetId] = ($customerRequestsEntityCounts[$targetId] ?? 0) + 1;
                    }
                }
            }

            // Sync section count strictly with specific unread entity counts if present
            if (!empty($customerRequestsEntityCounts)) {
                $customerRequestsCount = array_sum($customerRequestsEntityCounts);
            }
            if (!empty($companyResponsesEntityCounts)) {
                $companyResponsesCount = array_sum($companyResponsesEntityCounts);
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
                        'customer_requests' => $customerRequestsEntityCounts,
                        'company_responses' => $companyResponsesEntityCounts,
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
     * Mark a specific entity (e.g. conversation_id or request_id) as read.
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
                if ($entityId) {
                    $notifications = DB::table('notifications')
                        ->where('notifiable_type', get_class($user))
                        ->where('notifiable_id', $userId)
                        ->whereNull('read_at')
                        ->get();

                    $foundSpecific = false;
                    foreach ($notifications as $notif) {
                        $data = json_decode($notif->data, true) ?? [];
                        $targetId = (string)($data['target_id'] ?? $data['entity_id'] ?? $data['request_id'] ?? '');
                        if ($targetId === (string)$entityId) {
                            DB::table('notifications')
                                ->where('id', $notif->id)
                                ->update(['read_at' => now()]);
                            $foundSpecific = true;
                        }
                    }

                    if (!$foundSpecific && $notifications->isNotEmpty()) {
                        DB::table('notifications')
                            ->where('id', $notifications->first()->id)
                            ->update(['read_at' => now()]);
                    }
                } else {
                    DB::table('notifications')
                        ->where('notifiable_type', get_class($user))
                        ->where('notifiable_id', $userId)
                        ->whereNull('read_at')
                        ->update(['read_at' => now()]);
                }
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
