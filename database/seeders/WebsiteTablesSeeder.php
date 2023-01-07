<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Blog;
use App\Models\FaqCategory;
use App\Models\BlogCategory;
use App\Models\VolunteerType;
use App\Models\ConsultantType;
use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('jobs')->first()) {
            Job::create([
                'en' => ['name' => 'test 1'],
                'ar' => ['name' => 'test 1']
            ]);
        }
        if (!DB::table('volunteer_types')->first()) {
            VolunteerType::create([
                'en' => ['name' => 'test 1'],
                'ar' => ['name' => 'test 1']
            ]);
        }
        if (!DB::table('consultant_types')->first()) {
            ConsultantType::create([
                'en' => ['name' => 'test 1'],
                'ar' => ['name' => 'test 1']
            ]);
        }
        if (!DB::table('blog_categories')->first()) {
            BlogCategory::create([
                'photo' => 'test.png',
                'en' => ['title' => 'test 1'],
                'ar' => ['title' => 'test 1']
            ]);
            if (!DB::table('blogs')->first()) {
                Blog::create([
                    'blog_category_id' => 1,
                    'photo_cover' => 'blog_test.png',
                    'photo_sm' => 'blog_test.png',
                    'en' => ['title' => 'test 1', 'description' => 'test 1', 'brief' => 'test 1'],
                    'ar' => ['title' => 'test 1', 'description' => 'test 1', 'brief' => 'test 1']
                ]);
            }
        }
        if (!DB::table('faq_categories')->first()) {
            FaqCategory::create([
                'en' => ['name' => 'test 1'],
                'ar' => ['name' => 'test 1']
            ]);
            if (!DB::table('faqs')->first()) {
                Faq::create([
                    'faq_category_id' => 1,
                    'en' => ['question' => 'test 1', 'answer' => 'test 1'],
                    'ar' => ['question' => 'test 1', 'answer' => 'test 1']
                ]);
            }
        }
    }
}
