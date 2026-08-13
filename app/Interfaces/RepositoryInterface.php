<?php

namespace App\Interfaces;

interface RepositoryInterface
{
    public function create(array $data);
    public function first(int $id, array $columns = ['*']);
    public function update(int $id, array $attributes = []);
    public function delete(int $id);
    public function getAll(array $columns = ['*']);
}
