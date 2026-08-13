<?php

namespace App\Http\Services\Shared;

use Illuminate\Http\Request;

class ShippingService
{
    public function __construct(protected \App\Http\Repositories\Shared\ShippingRepository $shippingRepository) {}

    public function storeShippingRequest($requestId, $responseId, $orderNumber, $cityOriginVendor, $addressOriginVendor, $phoneOriginVendor, $length, $width, $height, $weight)
    {
        return $this->shippingRepository->storeShippingRequest([
            'request_id' => $requestId,
            'response_id' => $responseId,
            'order_number' => $orderNumber,
            'city_origin_vendor' => $cityOriginVendor,
            'address_origin_vendor' => $addressOriginVendor,
            'phone_origin_vendor' => $phoneOriginVendor,
            'length' => $length,
            'width' => $width,
            'height' => $height,
            'weight' => $weight,
        ]);
    }
}
