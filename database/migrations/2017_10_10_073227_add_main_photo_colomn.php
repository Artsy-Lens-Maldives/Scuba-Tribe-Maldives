<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMainPhotoColomn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboard_photos', function($table) {
            $table->integer('main')->default('0');
        });
        Schema::table('catamaran_photos', function($table) {
            $table->integer('main')->default('0');
        });
        Schema::table('dive_photos', function($table) {
            $table->integer('main')->default('0');
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
            $table->dropColumn('main');
        });
        Schema::table('catamaran_photos', function($table) {
            $table->dropColumn('main');
        });
        Schema::table('dive_photos', function($table) {
            $table->dropColumn('main');
        });
    }
}
