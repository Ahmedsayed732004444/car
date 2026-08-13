<?php

namespace App\Http\Services\Vendor;

use App\Http\Repositories\Vendor\NewRequestRepository;
use App\Http\Services\BaseService;
use App\Models\BrandCar;
use App\Models\RequestBrandScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewRequestService extends BaseService
{
    public function __construct(protected NewRequestRepository $newRequestRepo) {}

    public function getNewRequests()
    {
        return $this->newRequestRepo->getNewRequests();
    }

    public function detailsNewRequests(Request $request, $requestId)
    {
        $request->merge([
            'requestId' => $requestId,
        ]);
        $this->validate($request->all(), [
            'requestId' => 'required|integer',
        ]);

        $result = $this->newRequestRepo->detailsRequestEligibleVendor($request->requestId);

        if (!$result)
            return buildApiResponseHelper(false, 'الطلب غير موجود');

        $result['brandsNames'] = $this->newRequestRepo->getRequestBrandNamesScope($request->requestId);
        $result['cities'] = $this->newRequestRepo->getRequestCitiesNamesScope($result->cities);
        $result['customFields'] = $this->newRequestRepo->getRequestCustomFields($request->requestId);
        $result['requestImages'] = $this->newRequestRepo->getRequestImages($request->requestId);

        return buildApiResponseHelper(true, 'تم جلب البيانات بنجاح', $result);
    }
}
