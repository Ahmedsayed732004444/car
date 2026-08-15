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

        $resultModel = $this->newRequestRepo->detailsRequestEligibleVendor((int) $request->requestId);

        if (!$resultModel) {
            return buildApiResponseHelper(false, 'الطلب غير موجود');
        }

        $result = $resultModel->toArray();

        $result['brandsNames'] = $this->newRequestRepo->getRequestBrandNamesScope((int) $request->requestId);
        $result['cities'] = $this->newRequestRepo->getRequestCitiesNamesScope($result['cities'] ?? null);
        $result['customFields'] = $this->newRequestRepo->getRequestCustomFields((int) $request->requestId);
        $result['requestImages'] = $this->newRequestRepo->getRequestImages((int) $request->requestId);

        return buildApiResponseHelper(true, 'تم جلب البيانات بنجاح', $result);
    }
}
