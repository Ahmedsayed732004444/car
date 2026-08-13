<?php

namespace App\Http\Controllers\API\V1\Shared;

use App\Exceptions\CustomResponseException;
use App\Http\Controllers\Controller;
use App\Http\Resources\CacheUpdateResource;
use App\Http\Services\Shared\CacheStaticDataVersionService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class CacheStaticDataVersionController extends Controller
{
    public function __construct(protected CacheStaticDataVersionService $service) {}

    public function checkUpdates(Request $request)
    {
        $result = $this->service->checkUpdates($request);
        try {
            // If there are no updates at all
            if (!$result['hasUpdates']) {
                return buildApiResponseHelper(false, __('messages.no_data_found')); // Not Modified
            }

            return buildApiResponseHelper(true, __('messages.data_fetched_successfully'), Arr::except($result, ['hasUpdates']));
        } catch (\Exception $e) {
            throw new CustomResponseException(message: __('exceptions.internal_server_error_500'), previous: $e);
        }
    }
}
