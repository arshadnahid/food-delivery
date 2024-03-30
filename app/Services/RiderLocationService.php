<?php

namespace App\Services;

use App\Models\RiderLocation;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class RiderLocationService
{
    use ApiResponses;

    public function store($request): JsonResponse
    {
        try {
            $riderLocation = RiderLocation::create($request->all());
            return $this->sendResponse(__('apiResponse.successfullySave'), $riderLocation);
        } catch
        (\Exception $exception) {
            return $this->sendErrors($exception->getMessage());
        }
    }
}
