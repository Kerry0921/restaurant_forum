<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte', function (Blueprint $table) {
            $table->Increments('cid');
            $table->string('rid');
            $table->string('cName');
            $table->string('cprice');
            $table->string('cRecommend');
            $table->string('cDescription');
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
        Schema::dropIfExists('carte');
    }
}
