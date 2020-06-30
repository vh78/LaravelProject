<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeviceSensores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_sensores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dev_id')->unsigned();
            $table->foreign('dev_id')->references('id')->on('devices');
            $table->bigInteger('sens_id')->unsigned();
            $table->foreign('sens_id')->references('id')->on('sensors');
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
        Schema::dropIfExists('devices_sensores');
    }
}
