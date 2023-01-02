<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'code' => '+2',
                'ar' => ['name' => 'مصر'],
                'en' => ['name' => 'Egypt']
            ],
            [
                'code' => '+966',
                'en' => ['name' => 'Saudi Arabian'],
                'ar' => ['name' => 'المملكة العربية السعودية'],
            ],
            [
                'code' => '+971',
                'en' => ['name' => 'United Arab Emirates'],
                'ar' => ['name' => 'الإمارات العربية المتحدة'],
            ],
        ];
        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
