<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->Increments('rid');
            $table->string('rName');
            $table->string('rDescription');
            $table->string('rBHour');
            $table->string('rOffer');
            $table->string('rAddress');
            $table->string('rPhoto');
            $table->string('mid')->unique();
            $table->string('rType');
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
        Schema::dropIfExists('restaurant');
    }
}
