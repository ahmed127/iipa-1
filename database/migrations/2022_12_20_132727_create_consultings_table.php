<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('job_id')->constrained();
            $table->foreignId('consultant_type_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('country_code');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->text('description');
            $table->string('attachment_letter');
            $table->string('nationality');
            $table->unsignedTinyInteger('fav_lang')->comment('1 => En - 2 => Ar');
            $table->unsignedTinyInteger('type')->comment('1 => request lawsuit - 2 => legal advisor');
            $table->unsignedTinyInteger('gender')->comment('1 => male - 2 => female');
            $table->unsignedTinyInteger('status')->default(1)->comment('1=>pending, 2 => inprogress, 3 => approved, 4 => rejected');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consultings');
    }
}
