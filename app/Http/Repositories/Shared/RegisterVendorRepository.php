<?php

namespace App\Http\Repositories\Shared;

use App\Interfaces\RepositoryInterface;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorCity;
use App\Models\VendorDocument;
use App\Models\VendorSpecialty;

class RegisterVendorRepository implements RepositoryInterface
{
    public function create(array $data) {}
    public function first(int $id, $columns = ['*']) {}
    public function update(int $id, array $attributes = []) {}
    public function delete(int $id) {}

    public function getAll($columns = ['*']) {}

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function createVendor(array $data)
    {
        return Vendor::create($data);
    }

    public function createVendorCities(array $data)
    {
        return VendorCity::create($data);
    }

    public function createVendorCategories(array $data)
    {
        return VendorSpecialty::create($data);
    }

    public function createVendorDocuments(array $data)
    {
        return VendorDocument::create($data);
    }
}
