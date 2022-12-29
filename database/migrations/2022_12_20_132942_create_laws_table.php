<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laws', function (Blueprint $table) {
            $table->id();
            $table->string('attachment_pdf');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('law_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('law_id')->constrained();
            $table->string('locale', 2)->index();

            $table->string('title');
            $table->text('description');

            $table->unique(['law_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('law_translations');
        Schema::drop('laws');
    }
}
