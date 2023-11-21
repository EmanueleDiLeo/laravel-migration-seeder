<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',50);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->mediumInteger('train_code');
            $table->tinyInteger('number_carriages');
            $table->boolean('isTime');
            $table->boolean('isDelete');
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
        Schema::dropIfExists('trains');
    }
};
