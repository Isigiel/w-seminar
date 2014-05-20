<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->boolean('featured');
			$table->string('name');
			$table->string('author');
		    $table->string('tags');
		    $table->string('category');
		    $table->string('icon');
		    $table->string('splash');
		    $table->string('head');
			$table->integer('followers');
			$table->integer('likes');
			$table->integer('downloads');
			$table->text('attributes-json');
			$table->text('images-json');
			$table->text('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mods');
	}

}
