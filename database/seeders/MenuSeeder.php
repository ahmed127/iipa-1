<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name'      => 'Sidebar',
            'status'    => 1,
            'type'      => 1,
        ]);

        DB::table('menu_items')->insert([
            'name'      => 'Administration',
            'menu_id'   => 1,
            'status'    => 1,
            'type'      => 1,
        ]);
        DB::table('menu_items')->insert([
            'name'      => 'Appearance',
            'menu_id'   => 1,
            'status'    => 1,
            'type'      => 1,
        ]);
        DB::table('menu_items')->insert([
            'name'      => 'Site Contents',
            'menu_id'   => 1,
            'status'    => 1,
            'type'      => 1,
        ]);
    }
}
