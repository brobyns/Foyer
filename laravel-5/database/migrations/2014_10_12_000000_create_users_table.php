<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('idParticipant');
            $table->string('name');
            $table->string('firstName')->nullable();
            $table->string('clubD')->nullable();
            $table->string('emailAddress')->unique()->nullable();
            $table->boolean('isMale');
            $table->date('dateOfBirth');
            $table->string('address')->nullable();
            $table->integer('zipCode')->nullable();
            $table->string('city')->nullable();
            $table->integer('valNr')->nullable();
            $table->string('shoeBrand')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
