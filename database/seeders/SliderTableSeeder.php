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
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
            [
                'en' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
            [
                'en' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'photo' => 'slider.png',
                'type'  => 2,
                'link'  => '#',
            ],
            [
                'en' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
                ],
                'ar' => [
                    'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                    'brief' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut accusantium in aut corporis reiciendis fugit fugiat odio at hic!',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam voluptate provident optio, explicabo ea ullam corporis blanditiis eaque distinctio deleniti magnam nemo accusantium inventore esse deserunt quaerat dolorum. Esse, quae nemo adipisci explicabo eligendi deleniti blanditiis corporis ullam maiores, ea eius laborum tempore fugiat libero voluptatem architecto at id cum.'
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
