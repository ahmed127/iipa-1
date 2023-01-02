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
        $this->call([
            AdminsTableSeeder::class,
            CountryTableSeeder::class,
            RolesPermissionsTableSeeder::class,
            SettingTableSeeder::class,
            SliderTableSeeder::class,
            PageTableSeeder::class,
            InformationTableSeeder::class,
            SocialLinkTableSeeder::class,
            MenuSeeder::class,
        ]);
    }
}
