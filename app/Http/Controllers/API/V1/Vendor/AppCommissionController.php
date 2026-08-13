<?php

namespace App\Http\Controllers\API\V1\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\AppCommission\PayAppCommissionRequest;
use App\Models\Payment;
use App\Utils\UploadUtils;
use Illuminate\Http\Request;

class AppCommissionController extends Controller
{
    public function payAppCommission(PayAppCommissionRequest $request)
    {
        $imagesNames = UploadUtils::uploadMultipleImage($request->images);

        $created = Payment::create([
            'user_id' => getCurrUserIdHelper(),
            'amount' => $request->amount,
            'date' => $request->date,
            'name_transfer' => $request->nameTransfer,
            'number_request' => $request->numberRequest,
            'notes' => $request->notes,
            'invoice_image' => count($imagesNames) > 0 ? $imagesNames[0] : null,
        ]);

        return $created ? buildApiResponseHelper(true, 'تم إرسال طلب دفع العمولة بنجاح') : buildApiResponseHelper(false, 'حدث خطاء في إرسال طلب دفع العمولة ... الرجاء المحاولة مرة اخرى');
    }
}
