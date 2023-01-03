<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('website');
            $table->unsignedTinyInteger('type')->comment('1 => authorized, 2=> not authorized');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('company_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('name');
            $table->string('location');

            $table->unique(['company_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_translations');
        Schema::drop('companies');
    }
}
