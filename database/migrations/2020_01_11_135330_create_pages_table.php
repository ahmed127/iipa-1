<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(false);
            $table->boolean('in_navbar')->default(false);
            $table->boolean('in_footer')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('page_translations', function(Blueprint $table)
        {
            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->string('locale', 2)->index();
            $table->string('name')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();

            $table->unique(['page_id','locale', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_translations');
        Schema::drop('pages');
    }
}
