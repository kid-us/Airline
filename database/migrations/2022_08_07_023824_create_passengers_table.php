<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('tokenID');
            $table->string('title')->nullable();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('gender');
            $table->date('dob');
            $table->string('email')->nullable();;
            $table->string('phone')->nullable();;
            $table->string('passenger');
            $table->string('travel');
            $table->integer('pay');
            $table->string('ticket');
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
        Schema::dropIfExists('passengers');
    }
}
