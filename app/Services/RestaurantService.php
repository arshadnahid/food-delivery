<?php

namespace App\Services;

use App\Http\Resources\NearestRiderResource;
use App\Models\Restaurant;
use App\Models\RiderLocation;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;


class RestaurantService
{
    use ApiResponses;

    public function index($restaurant): JsonResponse
    {

        try {
            $restaurant_lat = $restaurant->restaurant_lat;
            $restaurant_long = $restaurant->restaurant_long;
            $currentTime = now()->subMinutes(5);
            $nearestRiders = RiderLocation::select("rider_locations.id","rider_locations.rider_id",
                DB::raw("6371 * acos(cos(radians(" . $restaurant_lat . "))
                    * cos(radians(rider_locations.lat))
                    * cos(radians(rider_locations.long) - radians(" . $restaurant_long . "))
                    + sin(radians(" . $restaurant_lat . "))
                    * sin(radians(rider_locations.lat))) AS distance"))
                ->with('rider')
                //->where('capture_time', '>=', $currentTime)
                ->orderBY("distance")
                ->get();

            return $this->sendResponse(__('apiResponse.successfullyGet'), NearestRiderResource::collection($nearestRiders));

        } catch
        (\Exception $exception) {
            return $this->sendErrors($exception->getMessage());
        }

    }

}
