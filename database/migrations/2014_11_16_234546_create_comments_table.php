<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('retrieval_id');
            $table->string('title');
            $table->text('comment');
            $table->dateTime('post_time');
            $table->string('category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('comments');
	}

}
