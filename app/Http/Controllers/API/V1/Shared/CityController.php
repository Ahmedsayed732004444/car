<?php

namespace App\Http\Controllers\API\V1\Shared;

use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    public function getCities()
    {
        $cities = City::getCitiesCached()
            ->where('is_active', true)
            ->values();

        return buildApiResponseHelper(true, 'تم جلب المدن بنجاح', $cities);
    }
}
