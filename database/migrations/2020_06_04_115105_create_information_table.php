<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();

            $table->boolean('facebook_visible')->default(1);
            $table->boolean('twitter_visible')->default(1);
            $table->boolean('instagram_visible')->default(1);
            $table->boolean('linkedin_visible')->default(1);
            $table->boolean('youtube_visible')->default(1);

            $table->string('location_lat')->nullable();
            $table->string('location_long')->nullable();

            $table->string('logo_fav_icon')->nullable();
            $table->softDeletes();
        });

        // phone
        // email
        // facebook_link
        // twitter_link
        // instagram_link
        // linkedin_link
        // youtube_link
        // facebook_visible
        // twitter_visible
        // instagram_visible
        // linkedin_visible
        // youtube_visible
        // location_lat
        // location_long
        // logo_en
        // logo_ar
        // logo_fiv_icon
        // name_en
        // name_ar
        // address_en
        // address_ar

        Schema::create('information_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_id')->constrained('informations');
            $table->string('locale', 2)->index();

            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();

            $table->unique(['information_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('information_translations');
        Schema::drop('information');
    }
}
