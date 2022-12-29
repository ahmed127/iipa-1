<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allData = [
            ['name' => 'Facebook',  'link'    => 'https://www.facebook.com/#',  'status' => 1,],
            ['name' => 'Twitter',   'link'    => 'https://www.twitter.com/#',   'status' => 1,],
            ['name' => 'Instagram', 'link'    => 'https://www.instagram.com/#', 'status' => 1,],
            ['name' => 'Linkedin',  'link'    => 'https://www.linkedin.com/#',  'status' => 1,],
        ];


        foreach ($allData as $data) {
            SocialLink::create($data);
        }
    }
}
