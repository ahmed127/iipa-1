<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'type'  => 1,
                'photo' => 'cover.png',
                'en' => [
                    'name'              => 'Incorporation',
                    'meta_title'        => 'Incorporation',
                    'meta_description'  => 'Incorporation',
                    'meta_keywords'     => 'Incorporation',
                    'name'              => 'Incorporation',
                    'slug'              => 'Incorporation',
                    'title'             => 'Incorporation',
                    'brief'             => 'Incorporation',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
                'ar' => [
                    'name'              => 'التآسيس',
                    'meta_title'        => 'التآسيس',
                    'meta_description'  => 'التآسيس',
                    'meta_keywords'     => 'التآسيس',
                    'name'              => 'التآسيس',
                    'slug'              => 'التآسيس',
                    'title'             => 'التآسيس',
                    'brief'             => 'التآسيس',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
            ],
            [
                'type'  => 1,
                'photo' => 'cover.png',
                'en' => [
                    'name'              => 'Our Goals',
                    'meta_title'        => 'Our Goals',
                    'meta_description'  => 'Our Goals',
                    'meta_keywords'     => 'Our Goals',
                    'name'              => 'Our Goals',
                    'slug'              => 'our-goals',
                    'title'             => 'Our Goals',
                    'brief'             => 'Our Goals',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
                'ar' => [
                    'name'              => 'اهداف الجمعية',
                    'meta_title'        => 'اهداف الجمعية',
                    'meta_description'  => 'اهداف الجمعية',
                    'meta_keywords'     => 'اهداف الجمعية',
                    'name'              => 'اهداف الجمعية',
                    'slug'              => 'اهداف-الجمعية',
                    'title'             => 'اهداف الجمعية',
                    'brief'             => 'اهداف الجمعية',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
            ],
            [
                'type'  => 1,
                'photo' => 'cover.png',
                'image' => 'organizational-structure.png',
                'en' => [
                    'name'              => 'Organizational Structure',
                    'meta_title'        => 'Organizational Structure',
                    'meta_description'  => 'Organizational Structure',
                    'meta_keywords'     => 'Organizational Structure',
                    'name'              => 'Organizational Structure',
                    'slug'              => 'organizational-structure',
                    'title'             => 'Organizational Structure',
                    'brief'             => 'Organizational Structure',
                ],
                'ar' => [
                    'name'              => 'الهيكل التنظيمي',
                    'meta_title'        => 'الهيكل التنظيمي',
                    'meta_description'  => 'الهيكل التنظيمي',
                    'meta_keywords'     => 'الهيكل التنظيمي',
                    'name'              => 'الهيكل التنظيمي',
                    'slug'              => 'الهيكل التنظيمي',
                    'title'             => 'الهيكل التنظيمي',
                    'brief'             => 'الهيكل التنظيمي',
                ],
            ],
            [
                'type'  => 1,
                'photo' => 'cover.png',
                'en' => [
                    'name'              => 'How to file a class action',
                    'meta_title'        => 'How to file a class action',
                    'meta_description'  => 'How to file a class action',
                    'meta_keywords'     => 'How to file a class action',
                    'name'              => 'How to file a class action',
                    'slug'              => 'How-to-file-a-class-action',
                    'title'             => 'How to file a class action',
                    'brief'             => 'How to file a class action',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
                'ar' => [
                    'name'              => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_title'        => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_description'  => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_keywords'     => 'شرح كيفية تقديم دعوة جماعية',
                    'name'              => 'شرح كيفية تقديم دعوة جماعية',
                    'slug'              => 'شرح كيفية تقديم دعوة جماعية',
                    'title'             => 'شرح كيفية تقديم دعوة جماعية',
                    'brief'             => 'شرح كيفية تقديم دعوة جماعية',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
            ],

        ];



        $partners = [
            ['logo' => 'company-1.png', 'link' => '#'],
            ['logo' => 'company-2.png', 'link' => '#'],
            ['logo' => 'company-3.png', 'link' => '#'],
        ];


        foreach ($pages as $page) {
            Page::create($page);
        }

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
