<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RiderLocationRequest;
use App\Services\RiderLocationService;
use Illuminate\Http\Request;

class RiderLocationController extends Controller
{
    public function store(RiderLocationRequest $riderLocationRequest, RiderLocationService $riderLocationService)
    {
        return $riderLocationService->store($riderLocationRequest);
    }
}
