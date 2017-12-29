<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOderColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboard_photos', function($table) {
            $table->integer('order');
        });

        Schema::table('catamaran_photos', function($table) {
            $table->integer('order');
        });

        Schema::table('dive_photos', function($table) {
            $table->integer('order');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('liveaboard_photos', function($table) {
            $table->dropColumn('order');
        });
        
        Schema::table('catamaran_photos', function($table) {
            $table->dropColumn('order');
        });
        
        Schema::table('dive_photos', function($table) {
            $table->dropColumn('order');
        });
    }
}
