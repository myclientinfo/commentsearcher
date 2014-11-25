<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetrievalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('retrievals', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('provider_id');
            $table->string('last_string');
            $table->dateTime('last_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('retrievals');
	}

}
