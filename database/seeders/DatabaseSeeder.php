<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Country::factory(5)->create();
         City::factory(50)->create();

//         $countries = Country::all();
//
//         City::all()->each(function ($city) {
//             $city->country_id = rand(1, 5);
//         });

    }
}
