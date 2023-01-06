<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->string('photo');
            $table->string('link')->nullable();
            $table->string('attachment_pdf')->nullable();
            $table->string('type')->comment('page - pdf');
            $table->unsignedInteger('in_order_to')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('slider_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slider_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title')->nullable();
            $table->string('brief')->nullable();
            $table->text('description')->nullable();

            $table->unique(['slider_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slider_translations');
        Schema::drop('sliders');
    }
}
