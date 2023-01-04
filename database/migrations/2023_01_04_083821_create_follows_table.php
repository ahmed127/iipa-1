<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->morphs('forable');
            $table->unsignedTinyInteger('department')->default(1)->comment('1 => advisors, 2 => class_action, 3 => volunteer, 4 => training_entities, 5 => training_individuals');
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
        Schema::dropIfExists('follows');
    }
}
