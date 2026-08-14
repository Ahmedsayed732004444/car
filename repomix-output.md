This file is a merged representation of a subset of the codebase, containing specifically included files and files not matching ignore patterns, combined into a single document by Repomix.
The content has been processed where line numbers have been added.

# File Summary

## Purpose
This file contains a packed representation of a subset of the repository's contents that is considered the most important context.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.
- Pay special attention to the Repository Description. These contain important context and guidelines specific to this project.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Only files matching these patterns are included: **/*Notification*, **/*notification*, **/*Fcm*, **/api.php
- Files matching these patterns are excluded: vendor/**, node_modules/**, storage/**, bootstrap/cache/**, public/storage/**, public/build/**, tests/**, database/factories/**, database/seeders/**, *.lock, *.log, .env*, .git/**
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Line numbers have been added to the beginning of each line
- Files are sorted by Git change count (files with more changes are at the bottom)

# User Provided Header
Car Mediator Platform Backend Codebase Summary

# Directory Structure
```
app/Events/NotificationBadgeUpdated.php
app/Http/Controllers/API/NotificationBadgeController.php
app/Http/Controllers/API/V1/Shared/NotificationController.php
app/Http/Controllers/Auth/EmailVerificationNotificationController.php
app/Notifications/SendNotification.php
app/Traits/NotificationsTrait.php
app/Utils/FcmNotificationUtils.php
database/migrations/2025_08_02_153431_create_notifications_table.php
routes/api.php
```

# Files

## File: app/Events/NotificationBadgeUpdated.php
```php
 1: <?php
 2: 
 3: namespace App\Events;
 4: 
 5: use Illuminate\Broadcasting\Channel;
 6: use Illuminate\Broadcasting\InteractsWithSockets;
 7: use Illuminate\Broadcasting\PrivateChannel;
 8: use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
 9: use Illuminate\Foundation\Events\Dispatchable;
10: use Illuminate\Queue\SerializesModels;
11: 
12: class NotificationBadgeUpdated implements ShouldBroadcast
13: {
14:     use Dispatchable, InteractsWithSockets, SerializesModels;
15: 
16:     public $userId;
17:     public $category;
18:     public $unreadCounts;
19: 
20:     public function __construct($userId, $category, array $unreadCounts)
21:     {
22:         $this->userId = $userId;
23:         $this->category = $category;
24:         $this->unreadCounts = $unreadCounts;
25:     }
26: 
27:     public function broadcastOn(): array
28:     {
29:         return [new PrivateChannel("user.{$this->userId}")];
30:     }
31: 
32:     public function broadcastAs()
33:     {
34:         return 'notification.badge.updated';
35:     }
36: 
37:     public function broadcastWith(): array
38:     {
39:         return [
40:             'user_id' => $this->userId,
41:             'category' => $this->category,
42:             'unread_counts' => $this->unreadCounts,
43:         ];
44:     }
45: }
```

## File: app/Http/Controllers/API/V1/Shared/NotificationController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Traits\NotificationsTrait;
 7: use Illuminate\Http\Request;
 8: 
 9: class NotificationController extends Controller
10: {
11:     use NotificationsTrait;
12: 
13:     public function index(Request $request)
14:     {
15:         return $this->getNotifications($request);
16:     }
17: }
```

## File: app/Http/Controllers/Auth/EmailVerificationNotificationController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: 
 9: class EmailVerificationNotificationController extends Controller
10: {
11:     /**
12:      * Send a new email verification notification.
13:      */
14:     public function store(Request $request): RedirectResponse
15:     {
16:         if ($request->user()->hasVerifiedEmail()) {
17:             return redirect()->intended(route('dashboard', absolute: false));
18:         }
19: 
20:         $request->user()->sendEmailVerificationNotification();
21: 
22:         return back()->with('status', 'verification-link-sent');
23:     }
24: }
```

## File: database/migrations/2025_08_02_153431_create_notifications_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('notifications', function (Blueprint $table) {
15:             $table->uuid('id')->primary();
16:             $table->string('type');
17:             $table->morphs('notifiable');
18:             $table->text('data');
19:             $table->timestamp('read_at')->nullable();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('notifications');
30:     }
31: };
```

## File: app/Notifications/SendNotification.php
```php
 1: <?php
 2: 
 3: namespace App\Notifications;
 4: 
 5: use Illuminate\Bus\Queueable;
 6: use Illuminate\Notifications\Notification;
 7: 
 8: class SendNotification extends Notification
 9: {
10:     use Queueable;
11: 
12:     protected $title;
13:     protected $body;
14:     protected $category;
15:     protected $targetId;
16: 
17:     public function __construct($title, $body, $category = 'customer_requests', $targetId = null)
18:     {
19:         $this->title = $title;
20:         $this->body = $body;
21:         $this->category = $category;
22:         $this->targetId = $targetId;
23:     }
24: 
25:     /**
26:      * Get the notification's delivery channels.
27:      *
28:      * @return array<int, string>
29:      */
30:     public function via(object $notifiable): array
31:     {
32:         return ['database'];
33:     }
34: 
35:     /**
36:      * Get the array representation of the notification.
37:      *
38:      * @return array<string, mixed>
39:      */
40:     public function toArray(object $notifiable): array
41:     {
42:         return [
43:             'title' => $this->title,
44:             'body' => $this->body,
45:             'category' => $this->category,
46:             'target_id' => $this->targetId,
47:         ];
48:     }
49: }
```

## File: app/Traits/NotificationsTrait.php
```php
 1: <?php
 2: 
 3: namespace App\Traits;
 4: 
 5: use App\Enums\user\UserRoleEnum;
 6: use App\Utils\FcmNotificationUtils;
 7: use App\Models\User;
 8: use App\Notifications\SendNotification;
 9: use Illuminate\Http\Request;
10: 
11: trait NotificationsTrait
12: {
13: 
14:     public function notifyToAdmin($title, $body)
15:     {
16:         $admins = User::role([UserRoleEnum::Super_Admin->value, UserRoleEnum::Admin->value], 'admin')->get();
17:         foreach ($admins as $admin) {
18:             $admin->notify(new SendNotification(title: $title, body: $body));
19:         }
20:     }
21: 
22:     public function notifyRequestToEligibleVendors($vendors)
23:     {
24:         foreach ($vendors as $vendor) {
25:             $user = User::where('id', $vendor->user_id)->first(['id', 'fcm_token']);
26:             if ($user) {
27:                 $user->notify(new SendNotification(title: 'طلب جديد', body: 'تم اضافة طلب جديد', category: 'customer_requests'));
28:                 (new FcmNotificationUtils())->setTitle('طلب جديد')->setBody('تم اضافة طلب جديد')->setCategory('customer_requests')->setToken($user->fcm_token)->send();
29:             }
30:         }
31:     }
32: 
33:     public function notifyByID($userId, $title, $body, $notifyDB = true, $category = 'conversations')
34:     {
35:         $user = User::where('id', $userId)->first(['id', 'fcm_token']);
36:         if ($user) {
37:             if ($notifyDB) {
38:                 $user->notify(new SendNotification(title: $title, body: $body, category: $category));
39:             }
40:             (new FcmNotificationUtils())->setTitle($title)->setBody($body)->setCategory($category)->setToken($user->fcm_token)->send();
41:         }
42:     }
43: 
44:     public function getNotifications(Request $request)
45:     {
46:         $user = currUserHelper();
47:         $notifications = $user->notifications()
48:             ->select('id', 'data', 'created_at')
49:             ->orderBy('created_at', 'desc')
50:             ->paginate(20);
51: 
52:         $notifications->getCollection()->transform(function ($item) {
53:             $data = $item->data;
54: 
55:             return [
56:                 'id' => $item->id,
57:                 'title' => $data['title'] ?? null,
58:                 'body' => $data['body'] ?? null,
59:                 'created_at' => $item->created_at->format('Y-m-d H:i'),
60:             ];
61:         });
62: 
63:         // return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
64:         //     'current_page' => $result->currentPage(),
65:         //     'last_page' => $result->lastPage(),
66:         //     'data' => $result->items(),
67:         // ]);
68: 
69:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
70:             'current_page' => $notifications->currentPage(),
71:             'last_page' => $notifications->lastPage(),
72:             'total' => $notifications->total(),
73:             'per_page' => $notifications->perPage(),
74:             'data' => $notifications->items(),
75:         ]);
76:     }
77: }
```

## File: app/Utils/FcmNotificationUtils.php
```php
  1: <?php
  2: 
  3: namespace App\Utils;
  4: 
  5: use Exception;
  6: use GuzzleHttp\Client as GuzzleClient;
  7: use Google_Client;
  8: use Illuminate\Support\Facades\Cache;
  9: use Illuminate\Support\Facades\Log;
 10: 
 11: 
 12: class FcmNotificationUtils
 13: {
 14:     protected $title;
 15:     protected $body;
 16:     protected $icon;
 17:     protected $click_action;
 18:     protected $token;
 19:     protected $topic;
 20:     protected $category;
 21: 
 22:     public function setCategory($category)
 23:     {
 24:         $this->category = $category;
 25:         return $this;
 26:     }
 27: 
 28:     /**
 29:      *Title of the notification.
 30:      *@param string $title
 31:      */
 32:     public function setTitle($title)
 33:     {
 34:         $this->title = $title;
 35:         return $this;
 36:     }
 37: 
 38:     /**
 39:      *Body of the notification.
 40:      *@param string $body
 41:      */
 42:     public function setBody($body)
 43:     {
 44:         $this->body = $body;
 45:         return $this;
 46:     }
 47: 
 48:     /**
 49:      *Icon of the notification.
 50:      *@param string $icon
 51:      */
 52:     public function setIcon($icon)
 53:     {
 54:         $this->icon = $icon;
 55:         return $this;
 56:     }
 57: 
 58:     /**
 59:      *Link of the notification when user click on it.
 60:      *@param string $click_action
 61:      */
 62:     public function setClickAction($click_action)
 63:     {
 64:         $this->click_action = $click_action;
 65:         return $this;
 66:     }
 67: 
 68:     /**
 69:      *Token used to send notification to specific device. Unusable with setTopic() at same time.
 70:      *@param string $string
 71:      */
 72:     public function setToken($token)
 73:     {
 74:         $this->token = $token;
 75:         return $this;
 76:     }
 77: 
 78:     /**
 79:      *Topic of the notification. Unusable with setToken() at same time.
 80:      *@param string $topic
 81:      */
 82:     public function setTopic($topic)
 83:     {
 84:         $this->topic = $topic;
 85:         return $this;
 86:     }
 87: 
 88:     /**
 89:      * Verify the conformity of the notification. If everything is ok, send the notification.
 90:      */
 91:     public function send()
 92:     {
 93:         // Token and topic combinaison verification
 94:         if ($this->token != null && $this->topic != null) {
 95:             return;
 96:         }
 97: 
 98:         // Empty token or topic verification
 99:         if ($this->token == null && $this->topic == null) {
100:             return;
101:         }
102: 
103:         // Title verification
104:         if (!isset($this->title)) {
105:             return;
106:         }
107: 
108:         // Body verification
109:         if (!isset($this->body)) {
110:             return;
111:         }
112: 
113:         return $this->prepareSend();
114:     }
115: 
116:     private function prepareSend()
117:     {
118:         $dataArr = [
119:             'click_action' => $this->click_action ?? 'FLUTTER_NOTIFICATION_CLICK',
120:             'status' => 'done',
121:             'type_notification' => 'all',
122:             'category' => $this->category ?? 'conversations',
123:             'screen' => 'NotificationsScreen',
124:         ];
125: 
126:         if (isset($this->topic)) {
127:             $json = [
128:                 "message" => [
129:                     "topic" => $this->topic,
130:                     "notification" => [
131:                         "title" => $this->title,
132:                         "body" => $this->body,
133:                     ],
134:                     'data' => $dataArr,
135:                 ]
136:             ];
137:         } else if (isset($this->token)) {
138:             $json = [
139:                 "message" => [
140:                     "token" => $this->token,
141:                     "notification" => [
142:                         "title" => $this->title,
143:                         "body" => $this->body,
144:                     ],
145:                     'data' => $dataArr,
146:                 ]
147:             ];
148:         }
149: 
150:         // $encodedData = json_encode($data);
151: 
152:         return $this->handleSend($json);
153:     }
154: 
155:     private function handleSend($json)
156:     {
157:         try {
158:             $client = new GuzzleClient();
159:             // project_id = mazad-ibraa
160:             $response = $client->post('https://fcm.googleapis.com/v1/projects/car-mediator-platform/messages:send', [
161:                 'headers' => [
162:                     'Authorization' => 'Bearer ' . $this->getAccessToken(),
163:                     'Content-Type' => 'application/json',
164:                 ],
165:                 'json' => $json,
166:             ]);
167: 
168:             return $response ?? '';
169:         } catch (Exception $e) {
170:             Log::error("[Notification] ERROR", [$e->getMessage()]);
171: 
172:             return $e;
173:         }
174:     }
175: 
176:     private function getAccessToken()
177:     {
178:         return Cache::remember('fcm_access_token_key', 3500, function () {
179:             $credentialsPath = storage_path('app/json/firebase/car-mediator-platform-firebase-adminsdk-fbsvc-1d8876fe49.json'); // Path to your service account file
180: 
181:             $client = new Google_Client();
182:             $client->setAuthConfig($credentialsPath);
183:             $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
184: 
185:             $token = $client->fetchAccessTokenWithAssertion();
186:             return $token['access_token'];
187:         });
188:     }
189: }
```

## File: routes/api.php
```php
 1: <?php
 2: 
 3: use App\Http\Controllers\API\V1\Shared\CacheStaticDataVersionController;
 4: use Illuminate\Http\Request;
 5: use Illuminate\Support\Facades\Route;
 6: 
 7: Route::prefix('v1/user')->group(base_path('routes/api_user_v1.php'));
 8: Route::prefix('v1/vendor')->group(base_path('routes/api_vendor_v1.php'));
 9: 
10: Route::get('/user', function (Request $request) {
11:     return $request->user();
12: })->middleware('auth:sanctum');
13: 
14: Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
15:     Route::prefix('/chat/messages')->controller(App\Http\Controllers\API\V1\Shared\Conversations\MessageConversationController::class)->group(function () {
16:         Route::get('/{conversationId}', 'index');
17:         Route::post('/send', 'store');
18:     });
19:     Route::prefix('/chat/conversations')->controller(App\Http\Controllers\API\V1\Shared\Conversations\ConversationController::class)->group(function () {
20:         Route::post('/create-conversation', 'store');
21:         Route::get('/user-conversations', 'getUserConversations');
22:         Route::get('/vendor-conversations', 'getVendorConversations');
23:     });
24: 
25:     Route::prefix('/notifications')->group(function () {
26:         Route::get('/unread-counts', [App\Http\Controllers\Api\NotificationBadgeController::class, 'unreadCounts']);
27:         Route::post('/mark-category-read', [App\Http\Controllers\Api\NotificationBadgeController::class, 'markCategoryRead']);
28:         Route::get('/', [App\Http\Controllers\API\V1\Shared\NotificationController::class, 'index']);
29:     });
30: });
31: 
32: Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
33:     Route::get('/uploads-private/{filename}', 'getSensitiveImage');
34:     Route::get('/uploads/{filename}', 'getImage');
35: });
36: 
37: Route::prefix('v1/auth')->controller(App\Http\Controllers\API\V1\Shared\Auth\AuthController::class)->group(function () {
38:     Route::post('/register', 'register');
39:     Route::post('/login-with-otp', 'loginWithOtp');
40:     Route::post('/logout', 'logout')->middleware('auth:sanctum');
41: });
42: 
43: Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
44:     Route::get('/{filename}', 'getSensitiveImage');
45: });
46: 
47: Route::prefix('v1')->group(function () {
48:     Route::post('/cache/check-updates', [CacheStaticDataVersionController::class, 'checkUpdates']);
49: });
```

## File: app/Http/Controllers/API/NotificationBadgeController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\Api;
  4: 
  5: use App\Http\Controllers\Controller;
  6: use App\Models\Conversation;
  7: use App\Models\MessageConversation;
  8: use App\Models\Vendor;
  9: use Illuminate\Http\Request;
 10: use Illuminate\Support\Facades\DB;
 11: use Illuminate\Support\Facades\Log;
 12: 
 13: class NotificationBadgeController extends Controller
 14: {
 15:     /**
 16:      * Get unread notification counts grouped by section/category.
 17:      */
 18:     public function unreadCounts(Request $request)
 19:     {
 20:         try {
 21:             $user = $request->user();
 22:             if (!$user) {
 23:                 return response()->json([
 24:                     'success' => false,
 25:                     'message' => 'Unauthenticated'
 26:                 ], 401);
 27:             }
 28: 
 29:             $userId = $user->id;
 30:             $isVendor = Vendor::where('user_id', $userId)->exists();
 31: 
 32:             // Fetch unread notifications collection safely
 33:             $unreadNotifications = $user->unreadNotifications()->get();
 34:             $totalUnreadNotifications = $unreadNotifications->count();
 35: 
 36:             // 1. Unread Customer Requests (For Vendors)
 37:             $customerRequestsCount = $unreadNotifications->filter(function ($item) {
 38:                 $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
 39:                 $category = (string)($data['category'] ?? '');
 40:                 $title = (string)($data['title'] ?? '');
 41:                 $body = (string)($data['body'] ?? '');
 42:                 return $category === 'customer_requests' || str_contains($title, 'طلب') || str_contains($body, 'طلب');
 43:             })->count();
 44: 
 45:             if ($customerRequestsCount === 0 && $isVendor && $totalUnreadNotifications > 0) {
 46:                 $customerRequestsCount = $totalUnreadNotifications;
 47:             }
 48: 
 49:             // 2. Unread Company Responses (For Customers)
 50:             $companyResponsesCount = $unreadNotifications->filter(function ($item) {
 51:                 $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
 52:                 $category = (string)($data['category'] ?? '');
 53:                 $title = (string)($data['title'] ?? '');
 54:                 $body = (string)($data['body'] ?? '');
 55:                 return $category === 'company_responses' || str_contains($title, 'رد') || str_contains($body, 'رد');
 56:             })->count();
 57: 
 58:             if ($companyResponsesCount === 0 && !$isVendor && $totalUnreadNotifications > 0) {
 59:                 $companyResponsesCount = $totalUnreadNotifications;
 60:             }
 61: 
 62:             // 3. Unread Conversations (For both Users & Vendors)
 63:             $userConversationIds = Conversation::where('user_id', $userId)
 64:                 ->orWhere('vendor_id', $userId)
 65:                 ->pluck('id');
 66: 
 67:             $conversationsCount = 0;
 68:             if ($userConversationIds->isNotEmpty()) {
 69:                 $conversationsCount = MessageConversation::whereIn('conversation_id', $userConversationIds)
 70:                     ->where('sender_id', '!=', $userId)
 71:                     ->where(function ($q) {
 72:                         $q->where('read', 0)->orWhere('read', false)->orWhereNull('read');
 73:                     })
 74:                     ->count();
 75:             }
 76: 
 77:             return response()->json([
 78:                 'success' => true,
 79:                 'data' => [
 80:                     'customer_requests' => (int)$customerRequestsCount,
 81:                     'company_responses' => (int)$companyResponsesCount,
 82:                     'conversations' => (int)$conversationsCount,
 83:                 ]
 84:             ]);
 85:         } catch (\Throwable $e) {
 86:             Log::error("[NotificationBadgeController] unreadCounts ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
 87:             return response()->json([
 88:                 'success' => false,
 89:                 'message' => 'Error: ' . $e->getMessage()
 90:             ], 500);
 91:         }
 92:     }
 93: 
 94:     /**
 95:      * Mark notifications for a specific category/section as read.
 96:      */
 97:     public function markCategoryRead(Request $request)
 98:     {
 99:         try {
100:             $user = $request->user();
101:             if (!$user) {
102:                 return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
103:             }
104: 
105:             $category = $request->input('category');
106:             $userId = $user->id;
107: 
108:             // Direct DB update for notifications
109:             DB::table('notifications')
110:                 ->where('notifiable_type', get_class($user))
111:                 ->where('notifiable_id', $userId)
112:                 ->whereNull('read_at')
113:                 ->update(['read_at' => now()]);
114: 
115:             // Direct DB update for conversations messages
116:             if ($category === 'conversations') {
117:                 $userConversationIds = Conversation::where('user_id', $userId)
118:                     ->orWhere('vendor_id', $userId)
119:                     ->pluck('id');
120: 
121:                 if ($userConversationIds->isNotEmpty()) {
122:                     MessageConversation::whereIn('conversation_id', $userConversationIds)
123:                         ->where('sender_id', '!=', $userId)
124:                         ->update(['read' => 1]);
125:                 }
126:             }
127: 
128:             return $this->unreadCounts($request);
129:         } catch (\Throwable $e) {
130:             Log::error("[NotificationBadgeController] markCategoryRead ERROR: " . $e->getMessage());
131:             return response()->json([
132:                 'success' => false,
133:                 'message' => 'Error: ' . $e->getMessage()
134:             ], 500);
135:         }
136:     }
137: }
```
