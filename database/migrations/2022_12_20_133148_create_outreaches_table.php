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

            $table->string('photo');
            $table->string('attachment_pdf');
            $table->unsignedTinyInteger('type')->comment(' 1=> page - 2 => pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('outreach_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outreach_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title');
            $table->string('brief');
            $table->text('description');

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
