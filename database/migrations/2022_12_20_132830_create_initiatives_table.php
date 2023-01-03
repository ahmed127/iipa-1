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
            $table->string('photo')->nullable();
            $table->string('attachment_pdf')->nullable();
            $table->unsignedTinyInteger('type')->comment('1=> page - 2 => pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('initiative_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('initiative_id')->constrained();
            $table->string('locale', 2)->index();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('title')->nullable();
            $table->text('brief')->nullable();
            $table->text('description')->nullable();
            $table->text('strategic_goal')->nullable();
            $table->text('target_group')->nullable();

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
