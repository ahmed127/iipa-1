<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiativesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiatives', function (Blueprint $table) {
            $table->id();

            $table->string('photo');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('initiative_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('initiative_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('name');
            $table->text('description');

            $table->unique(['initiative_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('initiative_translations');
        Schema::drop('initiatives');
    }
}
