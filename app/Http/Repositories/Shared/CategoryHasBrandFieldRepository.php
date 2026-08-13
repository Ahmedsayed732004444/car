<?php

namespace App\Http\Repositories\Shared;

use App\Interfaces\RepositoryInterface;
use App\Models\CategoryHasBrandField;

class CategoryHasBrandFieldRepository implements RepositoryInterface
{
    public function create(array $data) {}
    public function first(int $id, $columns = ['*']) {}
    public function update(int $id, array $attributes = []) {}
    public function delete(int $id) {}

    public function getAll($columns = ['*'])
    {
        CategoryHasBrandField::get($columns);
    }
}
