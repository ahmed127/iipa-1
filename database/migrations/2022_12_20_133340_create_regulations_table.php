<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulations', function (Blueprint $table) {
            $table->id();

            $table->string('photo');
            $table->string('attachment_pdf')->nullable();
            $table->string('link')->nullable();
            $table->unsignedTinyInteger('type')->comment(' 1=> page - 2 => pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('regulation_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regulation_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title');
            $table->string('brief');
            $table->text('description');

            $table->unique(['regulation_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regulations');
    }
}
