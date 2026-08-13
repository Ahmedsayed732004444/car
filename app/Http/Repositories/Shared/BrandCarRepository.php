<?php

namespace App\Http\Repositories\Shared;

use App\Interfaces\RepositoryInterface;
use App\Models\BrandCar;

class BrandCarRepository implements RepositoryInterface
{
    public function create(array $data) {}
    public function first(int $id, $columns = ['*']) {}
    public function update(int $id, array $attributes = []) {}
    public function delete(int $id) {}

    public function getAll($columns = ['*'])
    {
        BrandCar::get($columns);
    }
}
