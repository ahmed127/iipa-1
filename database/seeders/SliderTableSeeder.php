<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sliders = [
            [
                'en' => [
                    'title' => 'Request legal advice',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'طلب الاستشارة القانونية',
                    'brief' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا ',
                    'description' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا '
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
            [
                'en' => [
                    'title' => 'Request for advice for a class action lawsuit',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'طلب استشارة لدعوى جماعية',
                    'brief' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا ',
                    'description' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا '
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
            [
                'en' => [
                    'title' => 'Rights of individual investors',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'حقوق المستثمرين الافراد',
                    'brief' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا ',
                    'description' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا '
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
        ];


        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
