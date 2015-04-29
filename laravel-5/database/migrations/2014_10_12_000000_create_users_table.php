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
            $table->string('firstname')->nullable();
            $table->string('clubD')->nullable();
            $table->string('email')->unique();
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
