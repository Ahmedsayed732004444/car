<?php

// use App\Enums\UserRoleEnum;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Number;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

if (!function_exists('currUserHelper')) {
    function currUserHelper()
    {
        try {
            if (auth('sanctum')->check()) {
                return auth('sanctum')->user();
            }

            if (auth('web')->check()) {
                return auth('web')->user();
            }

            // if (auth('admin')->check()) {
            //     return auth('admin')->user();
            // }
        } catch (\Throwable $e) {
            Log::warning('currUserHelper failed: ' . $e->getMessage());
        }

        return null;
    }
}

if (!function_exists('getCurrUserIdHelper')) {
    function getCurrUserIdHelper(): int
    {
        return currUserHelper()?->id ?? 0;
    }
}

if (!function_exists('getCurrVendorIdHelper')) {
    function getCurrVendorIdHelper(): int
    {
        $userId = currUserHelper()?->id ?? 0;
        return Vendor::where('user_id', $userId)->value('id') ?? 0;
    }
}

if (!function_exists('getRoleCurrUserHelper')) {
    function getRoleCurrUserHelper()
    {
        return currUserHelper()->roles->pluck('name')[0] ?? '';
    }
}

if (!function_exists('requestIsJsonApiHelper')) {
    /**
     * check if the request expects a JSON/Api response
     */
    function requestIsJsonApiHelper(): bool
    {
        $request = request();

        if ($request->expectsJson()) {
            return true;
        }

        if ($request->is('api/*') || $request->is('*/api/*')) {
            return true;
        }

        $acceptHeader = $request->header('Accept');

        if ($acceptHeader) {
            $contentTypes = explode(',', $acceptHeader);
            foreach ($contentTypes as $type) {
                $type = strtolower(trim(explode(';', $type)[0]));

                if ($type === 'application/json' || $type === 'application/vnd.api+json') {
                    return true;
                }
            }
        }

        if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
            return true;
        }

        return false;
    }
}

if (!function_exists('filterSensitiveDataFromLogHelper')) {
    /**
     * Filter sensitive data from logs
     */
    function filterSensitiveDataFromLogHelper(array $data): array
    {
        return Arr::except($data, [
            'password',
            'password_confirmation',
            'credit_card',
            'cvv',
            'token',
            'api_token',
            'secret'
        ]);
    }
}

if (!function_exists('buildApiResponseHelper')) {
    function buildApiResponseHelper(bool $success, string $message, $result = null, int $statusCode = Response::HTTP_OK)
    {
        $response = [
            'success' => $success,
            'message' => $message,
            'result' => $result,
        ];

        return response()->json($response, $statusCode);
    }
}

if (!function_exists('resultApiPaginationHelper')) {
    function resultApiPaginationHelper($result)
    {
        return [
            'current_page' => $result->currentPage(),
            'last_page' => $result->lastPage(),
            'data' => $result->items(),
        ];
    }
}


// function currUserRoleNameHelper()
// {
//     $role = currUserHelper()->roles->pluck('name')[0] ?? '';

//     switch ($role) {
//         case UserRoleEnum::TRAINEES->value:
//             return 'المتدربين';
//             break;
//         case UserRoleEnum::SUPER_ADMIN->value:
//             return 'مدير النظام';
//             break;
//         case UserRoleEnum::ADMIN->value:
//             return 'الإدارة';
//             break;
//         case UserRoleEnum::ADMISSION->value:
//             return 'القبول والتسجيل';
//             break;
//         case UserRoleEnum::TEACHER->value:
//             return 'المدربين';
//             break;
//         default:
//             return config('app.name');
//     }
// }

// function getCurrUserRoleHelper()
// {
//     return currUserHelper()->roles->pluck('name')[0] ?? '';
// }

// function activeGuardHelper()
// {
//     if (auth('web')->check()) {
//         return 'web';
//     } else if (auth('admin')->check()) {
//         return 'admin';
//     }

//     return null;
// }

//buildApiResponse
// function sendResponseHelper($success, $message, $result = null)
// {
//     $response = [
//         'success' => $success,
//         'message' => $message,
//         'result' => $result,
//     ];

//     return response()->json($response);
// }

// function responseDataTableHelper($draw, $recordsCount, $totalRecordswithFilter, $records)
// {
//     $response = [
//         "draw" => $draw,
//         "iTotalRecords" => $recordsCount,
//         "iTotalDisplayRecords" => $totalRecordswithFilter,
//         "aaData" =>  $records
//     ];
//     return response()->json($response);
// }
// /**
//  * for select2 jquery
//  */
// function responseSearchSelect2Helper($result)
// {
//     return response()->json([
//         "results" => $result->items(),
//         "pagination" => array(
//             "more" => $result->currentPage() < $result->lastPage()
//         )
//     ]);
// }

// function getColumnNameDataTableHelper(Request $request, $orderArr)
// {
//     $columnIndex = (!is_null($orderArr) && count($orderArr) !== 0) ?  $orderArr[0]['column'] : 0;
//     $columnName =  !empty($request->get('columns')[$columnIndex]['data']) ? $request->get('columns')[$columnIndex]['data'] : $request->get('columns')[$columnIndex]['name'];
//     return $columnName;
// }

// function getColumnSortOrderDataTableHelper($orderArr)
// {
//     return (!is_null($orderArr) && count($orderArr) !== 0) ?  $orderArr[0]['dir'] : 'asc'; // asc or desc
// }

// function getStatusTraineeAttendanceHelper($traineeAttendance, $day)
// {
//     foreach ($traineeAttendance as $item) {
//         if (Carbon::parse($item['date'])->day == $day) {
//             return $item['status'];
//         }
//     }
// }

// function currencyFormatHelper($amount)
// {
//     return Number::format(($amount ?? 0)) . ' ' . 'ر.س';
// }

// function generalSettingAppHelper(string $key, $default = '')
// {
//     return app('shared_general_setting_app')[$key] ?? $default;
// }
