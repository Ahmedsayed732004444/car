<?php

namespace App\Http\Services\Shared;

use App\Http\Repositories\Shared\BrandCarRepository;

class BrandCarService
{
    public function __construct(protected BrandCarRepository $brandCarRepository) {}

    public function getAllBrandCars()
    {
        return $this->brandCarRepository->getAll(['id', 'brand_name_ar', 'brand_name_en']);
    }
}
