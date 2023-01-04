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
            $table->string('photo')->nullable();
            $table->string('image')->nullable();
            $table->string('attachment_pdf')->nullable();
            $table->boolean('active')->default(false);
            $table->unsignedTinyInteger('type')->comment('1=> page - 2 => pdf, 3 => image');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('page_translations', function (Blueprint $table) {

            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->string('locale', 2)->index();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('title')->nullable();
            $table->text('brief')->nullable();
            $table->text('description')->nullable();

            $table->unique(['page_id', 'locale']);
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
