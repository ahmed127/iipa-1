<?php

namespace Database\Seeders;

use App\Models\Regulation;
use Illuminate\Database\Seeder;

class RegulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regulations = [
            [
                'en' => [
                    'title' => 'Investor Protection Guide',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'دليل حماية المستثمر',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
            [
                'en' => [
                    'title' => 'Investor protection document',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'وثيقة حماية المستثمر',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
            [
                'en' => [
                    'title' => 'List of terms used',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'قائمة المصطلحات المستخدمة',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
            [
                'en' => [
                    'title' => 'financial market system',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'نظام السوق المالي',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
            [
                'en' => [
                    'title' => 'List of procedures for settling financial disputes',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'لائحة اجراءات الفصل في المنازعات المالية',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
            [
                'en' => [
                    'title' => 'market behavior chart',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'ar' => [
                    'title' => 'لائحة سلوكيات السوق',
                    'description' => 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.',
                    'brief' => 'Lorem ipsum dolor sit amet.'
                ],
                'photo' => 'bg-card.png',
                'type' => 2,
                'link' => '#',
            ],
        ];


        foreach ($regulations as $regulation) {
            Regulation::create($regulation);
        }
    }
}
