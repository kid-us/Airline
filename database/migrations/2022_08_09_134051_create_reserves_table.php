<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('ticket');
            $table->string('date');
            $table->string('class');
            $table->string('flightNo');
            $table->string('passengerCode');
            $table->string('arriveAt');
            $table->string('departAt');
            $table->string('terminal');
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
        Schema::dropIfExists('reserves');
    }
}
