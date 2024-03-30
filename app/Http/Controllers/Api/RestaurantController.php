<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Services\RestaurantService;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request, Restaurant $restaurant, RestaurantService $restaurantService)
    {

        return $restaurantService->index($restaurant);
    }
}
