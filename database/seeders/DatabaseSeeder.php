<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(InboxSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ScreenSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(BrandSeeder::class);
    }
}
