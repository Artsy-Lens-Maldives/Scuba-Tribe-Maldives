<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeleteForMainThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboards', function($table) {
            $table->softDeletes();
        });

        Schema::table('catamarans', function($table) {
            $table->softDeletes();
        });

        Schema::table('diving_spots', function($table) {
            $table->softDeletes();
        });

        Schema::table('liveaboard_itineraries', function($table) {
            $table->softDeletes();
        });

        Schema::table('catamaran_itineraries', function($table) {
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
        Schema::table('liveaboards', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('catamarans', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('diving_spots', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('liveaboard_itineraries', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('catamaran_itineraries', function($table) {
            $table->dropColumn('deleted_at');
        });
    }
}
