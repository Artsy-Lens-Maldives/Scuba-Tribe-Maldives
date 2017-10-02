<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatamaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catamarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('star')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('features')->nullable();
            $table->string('catamaran_layout_photo')->nullable();
            $table->longtext('other_features')->nullable();   
            $table->string('owner_address')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('catamarans');
    }
}
