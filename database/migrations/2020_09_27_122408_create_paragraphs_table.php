<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagraphsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paragraphs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained();
            $table->softDeletes();
        });


        Schema::create('paragraph_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paragraph_id')->constrained();

            $table->string('locale', 2)->index();

            $table->string('title');
            $table->longText('text');

            $table->unique(['paragraph_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paragraph_translations');
        Schema::drop('paragraphs');
    }
}
