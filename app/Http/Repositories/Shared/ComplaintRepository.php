<?php

namespace App\Http\Repositories\Shared;

use App\Models\Complaint;

class ComplaintRepository
{
    public function create(array $data)
    {
        return Complaint::create($data);
    }
}
