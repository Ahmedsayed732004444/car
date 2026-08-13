<?php

namespace App\Http\Controllers\Dashboard\ComplaintManagement;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\ComplaintManagemnt\ComplaintManagemntService;
use Illuminate\Http\Request;

class ComplaintManagemntController extends Controller
{
    public function __construct(protected ComplaintManagemntService $service) {}

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->service->index($request);
        }
        return view('dashboard.complaint-management.index');
    }
}
