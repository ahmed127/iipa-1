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
            'email' => 'info@iipa.org.sa',
            'ar' => [
                'name' => 'test name',
                'logo' => 'logo.png',
                'address' => 'المملكة العربية السعودية الرياض – المعذر الشمالي920016543'
            ],
            'en' => [
                'name' => 'test name',
                'logo' => 'logo.png',
                'address' => 'المملكة العربية السعودية الرياض – المعذر الشمالي920016543'
            ]
        ]);
    }
}
