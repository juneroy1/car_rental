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
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drivers_id')->nullable();
            $table->unsignedBigInteger('dispatcher_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->date('date_request');
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_address')->nullable();
            $table->string('client_phone_no')->nullable();

            $table->string('no_of_days')->nullable();
            $table->dateTime('date_time_dispatch')->nullable();
            $table->string('dispatcher_remarks')->nullable();
            $table->string('status')->nullable();

            $table->string('pickup_location')->nullable();
            $table->date('date_pick_up')->nullable();
            $table->time('time_pick_up')->nullable();

            $table->string('return_location')->nullable();
            $table->date('date_return')->nullable();
            $table->time('time_return')->nullable();

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
        Schema::dropIfExists('booking_transactions');
    }
};
