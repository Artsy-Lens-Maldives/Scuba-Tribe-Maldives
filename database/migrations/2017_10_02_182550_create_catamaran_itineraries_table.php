<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatamaranItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catamaran_itineraries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catamaran_id')->nullable();
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
        Schema::dropIfExists('catamaran_itineraries');
    }
}
