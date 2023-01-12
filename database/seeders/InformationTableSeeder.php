<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;

class InformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            'phone' => '0110203049',
            'ar' => ['name' => 'test name', 'logo' => 'logo.png'],
            'en' => ['name' => 'test name', 'logo' => 'logo.png']
        ]);
    }
}
