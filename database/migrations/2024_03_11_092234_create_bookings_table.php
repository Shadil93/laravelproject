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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id("booking_id");
            $table->unsignedBigInteger("register_id");
            $table->unsignedBigInteger("car_id");
            $table->dateTime('picking_up_date');
            $table->dateTime('dropping_off_date');
            $table->timestamps();


            //forgin
            $table->foreign('register_id')->references('id')->on('users');
            $table->foreign('car_id')->references('car_id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
