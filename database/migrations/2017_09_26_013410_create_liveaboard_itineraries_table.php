<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveaboardItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liveaboard_itineraries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('liveaboard_id')->nullable();
            $table->string('date')->nullable();
            $table->longtext('detail')->nullable();
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
        Schema::dropIfExists('liveaboard_itineraries');
    }
}
