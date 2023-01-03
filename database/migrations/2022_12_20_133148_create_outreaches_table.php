<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutreachesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outreaches', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('btn_link')->nullable();
            $table->string('attachment_pdf')->nullable();
            $table->unsignedTinyInteger('type')->comment('1=> page - 2 => pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('outreach_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outreach_id')->constrained();
            $table->string('locale', 2)->index();
            $table->string('btn_name')->nullable();
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

            $table->unique(['outreach_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('outreach_translations');
        Schema::drop('outreaches');
    }
}
