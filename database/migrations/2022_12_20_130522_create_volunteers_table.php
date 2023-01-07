<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('volunteer_type_id')->constrained();
            $table->string('full_name');
            $table->string('id_no');
            $table->string('email');
            $table->string('country_code');
            $table->string('phone');
            $table->string('attachment_cv');
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
        Schema::drop('volunteers');
    }
}
