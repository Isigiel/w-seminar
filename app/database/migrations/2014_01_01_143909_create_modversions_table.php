<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModversionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modversions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('mod_id');
			$table->string('version');
			$table->string('mc-version');
			$table->string('stablility');
			$table->string('path');
			$table->integer('downloads');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modversions');
	}

}
