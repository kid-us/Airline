<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->date('departDate');
            // $table->date('returnDate');
            $table->integer('terminal');
            $table->string('flightNo');
            $table->string('flightTime');
            $table->string('aircraft');
            $table->string('flightType');
            $table->integer('seats');
            $table->time('departTime');
            $table->time('returnTime');
            $table->string('economyPrice');
            $table->string('firstPrice');
            $table->string('businessPrice');
            $table->string('flightStop');
            $table->integer('reserved');
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
        Schema::dropIfExists('flights');
    }
}
