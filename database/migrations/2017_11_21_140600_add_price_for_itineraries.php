<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceForItineraries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboard_itineraries', function($table) {
            $table->integer('price')->default('0');
        });
        Schema::table('catamaran_itineraries', function($table) {
            $table->integer('price')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('liveaboard_itineraries', function($table) {
            $table->dropColumn('price');
        });
        Schema::table('catamaran_itineraries', function($table) {
            $table->dropColumn('price');
        });
    }
}
