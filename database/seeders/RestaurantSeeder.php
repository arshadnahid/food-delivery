<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => "Kacchi Bhai Mohammadpur",
                'restaurant_lat' => '23.763299',
                'restaurant_long' => '90.359161',
            ]
        ];
        Restaurant::insert($restaurants);
    }
}
