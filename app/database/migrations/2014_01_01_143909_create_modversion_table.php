<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModversionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modversion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('mod_id');
			$table->string('version');
			$table->string('mc_version');
			$table->boolean('stable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modversion');
	}

}
