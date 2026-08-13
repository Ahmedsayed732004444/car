<?php

namespace App\Http\Repositories\Shared;

use App\Interfaces\RepositoryInterface;
use App\Models\City;

class CityRepository implements RepositoryInterface
{
    public function create(array $data) {}
    public function first(int $id, $columns = ['*']) {}
    public function update(int $id, array $attributes = [])
    {
        $model = $this->first($id);
        if ($model) {
            $model->update($attributes);
        }

        //or

        $model = $this->first($id);
        if (!empty($model)) {
            $model->update($attributes);
        }
    }
    public function delete(int $id) {}

    public function getAll($columns = ['*'])
    {
        City::get($columns);
    }

    // get categories from cache
    public function getCachedCities($columns = ['*'])
    {
        return City::get($columns);
    }
}
