<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();

            $table->string('fees');
            $table->string('office_fees')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('package_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('name');
            $table->string('note')->nullable();
            $table->text('description');

            $table->unique(['package_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('package_translations');
        Schema::drop('packages');
    }
}
