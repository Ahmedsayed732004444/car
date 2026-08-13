<?php

namespace App\Http\Controllers\Dashboard\ShippingRequestManagement;

use App\Enums\StatusShippingRequestEnum;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\ShippingRequestManagement\ShippingRequestManagementService;
use App\Models\ShippingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ShippingRequestManagementController extends Controller
{
    public function __construct(protected ShippingRequestManagementService $service) {}

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->index($request);
        }
        return view('dashboard.shipping-request-management.index');
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|exists:shipping_requests,id',
            'status' => ['required', Rule::enum(StatusShippingRequestEnum::class)],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $shippingRequest = ShippingRequest::find($request->id);
        $shippingRequest->status = $request->status;

        if (! $shippingRequest->save())
            return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');

        $message = '';

        if ($request->status == StatusShippingRequestEnum::Pending->value) {
            $message = 'الشحن قيد الإنتظار';
        } else if ($request->status == StatusShippingRequestEnum::InProgress->value) {
            $message = 'الشحن قيد التنفيذ';
        } else if ($request->status == StatusShippingRequestEnum::Completed->value) {
            $message = 'الشحن مكتمل';
        }

        return buildApiResponseHelper(true, $message);
    }

    public function show(Request $request, $id)
    {

        $result = $this->service->show($id);
        $shippingRequest = $result['shippingRequest'] ?? null;
        $cheapestCompany = $result['cheapestCompany'] ?? null;

        return view('dashboard.shipping-request-management.show', compact('shippingRequest', 'cheapestCompany'));
    }

    public function createOrderShippingRequest(Request $request)
    {
        $this->service->createOrderShippingRequest($request);
        return redirect()->route('dashboard.shipping-request-management.index')->with('success', 'تم إنشاء طلب الشحن بنجاح');
    }

    public function delete(Request $request, $id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:shipping_requests,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $requestCustomer = ShippingRequest::find($request->id);

        return $requestCustomer->delete()
            ? buildApiResponseHelper(true, 'تم الحذف  بنجاح')
            : buildApiResponseHelper(false, 'لم يتم الحذف  بنجاح');
    }
}
