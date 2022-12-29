<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerTypesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('volunteer_type_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_type_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('name');

            $table->unique(['volunteer_type_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteer_type_translations');
        Schema::drop('volunteer_types');
    }
}
