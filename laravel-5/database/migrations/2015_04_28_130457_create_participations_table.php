<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('participations', function(Blueprint $table)
        {
            $table->integer('races_id')->unsigned()->index();
            $table->foreign('races_id')->references('id')->on('races')
                ->onDelete('cascade');

            $table->integer('year');

            $table->integer('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users');

            $table->integer('raceNumber');
            $table->unique('raceNumber');
            $table->integer('chipNumber')->nullable();
            $table->dateTime('time');
            $table->boolean('paid');
            $table->boolean('wiredTransfer');
            $table->boolean('signedUpOnline');
            $table->timestamps();

            $table->primary(array('users_id', 'races_id', 'year'));

        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participations');
	}

}
