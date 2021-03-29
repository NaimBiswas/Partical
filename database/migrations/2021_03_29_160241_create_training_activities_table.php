<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_activities', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('title');
            $table->string('description');
            $table->string('start_date');
            $table->string('end_date');
            $table->string("participants");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_activities');
    }
}
