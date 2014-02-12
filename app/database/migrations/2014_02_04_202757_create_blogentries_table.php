<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogentriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogentries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('site-id');
			$table->string('title');
			$table->string('content');
			$table->string('author');
			$table->string('tags');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogentries');
	}

}
