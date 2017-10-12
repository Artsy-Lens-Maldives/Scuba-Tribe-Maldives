<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtToPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liveaboard_photos', function($table) {
            $table->softDeletes();
        });

        Schema::table('catamaran_photos', function($table) {
            $table->softDeletes();
        });

        Schema::table('dive_photos', function($table) {
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
        Schema::table('liveaboard_photos', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('catamaran_photos', function($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('dive_photos', function($table) {
            $table->dropColumn('deleted_at');
        });
        
    }
}
