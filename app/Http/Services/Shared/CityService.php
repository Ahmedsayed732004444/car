<?php

namespace App\Http\Services\Shared;

use App\Http\Repositories\Shared\CityRepository;

class CityService
{
    public function __construct(protected CityRepository $cityRepository) {}

    public function getAllCities()
    {
        return $this->cityRepository->getAll(['id', 'city_name_ar', 'city_name_en', 'is_active']);
    }
}
