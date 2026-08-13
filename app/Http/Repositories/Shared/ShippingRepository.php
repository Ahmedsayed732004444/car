<?php

namespace App\Http\Repositories\Shared;

use App\Models\ShippingRequest;

class ShippingRepository
{
    public function storeShippingRequest(array $data)
    {
        return ShippingRequest::create($data);
    }
}
