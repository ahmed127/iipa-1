<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();

            $table->string('photo');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('blog_category_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_category_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title');

            $table->unique(['blog_category_id', 'locale']);
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_category_id')->constrained();
            $table->date('date')->nullable();

            $table->string('photo_sm');
            $table->string('photo_cover');

            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('blog_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title');
            $table->text('brief');
            $table->text('description');

            $table->unique(['blog_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog_category_translations');
        Schema::drop('blog_categories');
        Schema::drop('blog_translations');
        Schema::drop('blogs');
    }
}
