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
        Schema::create('payments', function (Blueprint $table) {
                $table->id("payment_id");
                $table->unsignedBigInteger('register_id');
                $table->unsignedBigInteger('car_id');
                $table->unsignedBigInteger('booking_id');
                $table->integer('rate');
                $table->string('payment');
                $table->string('status')->default("unpaid");
                $table->timestamp('paid_at')->nullable();
                $table->timestamps();
                $table->foreign('register_id')->references('id')->on('users');
                $table->foreign('car_id')->references('car_id')->on('cars');
                $table->foreign('booking_id')->references('booking_id')->on('bookings');
            });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
