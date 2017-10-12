<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrentMaxCapacity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboard_itineraries', function($table) {
            $table->integer('current')->nullable();
        });
        Schema::table('liveaboard_itineraries', function($table) {
            $table->integer('max')->nullable();
        });

        Schema::table('catamaran_itineraries', function($table) {
            $table->integer('current')->nullable();
        });
        Schema::table('catamaran_itineraries', function($table) {
            $table->integer('max')->nullable();
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
            $table->dropColumn('current');
        });
        Schema::table('liveaboard_itineraries', function($table) {
            $table->dropColumn('max');
        });

        Schema::table('catamaran_itineraries', function($table) {
            $table->dropColumn('current');
        });
        Schema::table('catamaran_itineraries', function($table) {
            $table->dropColumn('max');
        });
    }
}
