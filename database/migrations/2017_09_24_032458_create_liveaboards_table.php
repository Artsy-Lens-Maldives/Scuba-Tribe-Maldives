<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveaboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liveaboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('star')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('boat_features')->nullable();
            $table->longtext('food_and_drinks')->nullable();
            $table->longtext('diving')->nullable();
            $table->longtext('gear_rental')->nullable();
            $table->string('vessel_layout_photo')->nullable();
            $table->longtext('boat_specifications')->nullable();
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
        Schema::dropIfExists('liveaboards');
    }
}
