<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_types', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('class');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('consultant_type_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultant_type_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('name');

            $table->unique(['consultant_type_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consultant_type_translations');
        Schema::drop('consultant_types');
    }
}
