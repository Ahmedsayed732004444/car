<?php

namespace App\Http\Controllers\API\V1\Shared;

use App\Http\Controllers\Controller;
use App\Traits\NotificationsTrait;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    use NotificationsTrait;

    public function index(Request $request)
    {
        return $this->getNotifications($request);
    }
}
