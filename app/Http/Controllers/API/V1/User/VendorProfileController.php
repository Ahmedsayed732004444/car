<?php

namespace App\Http\Controllers\API\V1\User;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\VendorReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VendorProfileController extends Controller
{
    public function show($vendorId)
    {
        $vendor = Vendor::join('users', 'vendors.user_id', '=', 'users.id')
            ->where('vendors.id', $vendorId)
            ->orWhere('vendors.user_id', $vendorId)
            ->select([
                'vendors.id',
                'vendors.user_id',
                'vendors.company_name_ar',
                'vendors.company_name_en',
                'vendors.description',
                'vendors.rating',
                'vendors.commercial_record',
                'users.logo',
                'users.created_at',
            ])->first();

        if (!$vendor) {
            return buildApiResponseHelper(false, 'التاجر غير موجود');
        }

        $reviews = VendorReview::join('users', 'vendor_reviews.user_id', '=', 'users.id')
            ->where('vendor_reviews.vendor_id', $vendor->user_id)
            ->where('vendor_reviews.is_visible', 1)
            ->select([
                'vendor_reviews.id',
                'vendor_reviews.rating',
                'vendor_reviews.review',
                'vendor_reviews.created_at',
                'users.name as user_name',
                'users.logo as user_logo',
            ])
            ->orderBy('vendor_reviews.id', 'desc')
            ->paginate(15);

        $result = [
            'vendor' => [
                'id' => $vendor->id,
                'user_id' => $vendor->user_id,
                'company_name' => $vendor->company_name_ar ?? 'التاجر',
                'description' => $vendor->description,
                'rating' => (float) $vendor->rating,
                'logo' => $vendor->logo,
                'commercial_record' => $vendor->commercial_record,
                'total_reviews' => $reviews->total(),
                'member_since' => $vendor->created_at ? $vendor->created_at->format('Y-m-d') : null,
                'total_responses' => \App\Models\RequestResponse::whereIn('vendor_id', [$vendor->id, $vendor->user_id])->count(),
            ],
            'reviews' => resultApiPaginationHelper($reviews)
        ];

        return buildApiResponseHelper(true, 'تم التحميل بنجاح', $result);
    }

    public function storeReview(Request $request, $vendorId)
    {
        $validator = Validator::make($request->all(), [
            'request_id' => 'required|integer',
            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $vendor = Vendor::where('id', $vendorId)->orWhere('user_id', $vendorId)->first();
        if (!$vendor) {
            return buildApiResponseHelper(false, 'التاجر غير موجود');
        }

        $userId = getCurrUserIdHelper();

        $existingReview = VendorReview::where('vendor_id', $vendor->user_id)
            ->where('user_id', $userId)
            ->where('request_id', $request->request_id)
            ->first();

        if ($existingReview) {
            return buildApiResponseHelper(false, 'لقد قمت بتقييم هذا التاجر مسبقاً على هذا الطلب');
        }

        VendorReview::create([
            'request_id' => $request->request_id,
            'vendor_id' => $vendor->user_id,
            'user_id' => $userId,
            'rating' => $request->rating,
            'review' => $request->review,
            'is_visible' => 1,
        ]);

        // Update average rating
        $avgRating = VendorReview::where('vendor_id', $vendor->user_id)
            ->where('is_visible', 1)
            ->avg('rating');

        $vendor->update(['rating' => $avgRating]);

        return buildApiResponseHelper(true, 'تم إضافة التقييم بنجاح', ['new_rating' => $avgRating]);
    }
}

