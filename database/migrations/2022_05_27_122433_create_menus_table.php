<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('menu_routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('route_name');
            $table->string('url');
            $table->tinyInteger('status')->default('1')->comment('1 => Active, 2 => Inactive');
            $table->tinyInteger('type')->comment('1 => adminPanel, 2 => website');
        });

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status')->default('1')->comment('1 => Active, 2 => Inactive');
            $table->tinyInteger('type')->comment('1 => adminPanel, 2 => navbar_website, 3 => footer_website');
        });


        Schema::create('menu_items', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->foreignId('menu_id');
            $table->foreignId('menu_route_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->tinyInteger('status')->default('1')->comment('1 => Active, 2 => Inactive');
            $table->tinyInteger('type')->comment('1 => Category, 2 => Route');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
