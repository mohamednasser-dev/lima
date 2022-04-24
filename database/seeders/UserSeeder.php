<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $city = City::first();
        $user = User::create([
            'name' => 'customer',
            'email' => 'customer@demo.com',
            'phone' => '01201636129',
            'password' => '123456',
            'city_id' => $city->id,
        ]);
    }
}
