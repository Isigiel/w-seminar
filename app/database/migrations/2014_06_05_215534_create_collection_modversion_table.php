<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionModversionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collection_modversion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->integer('collection_id');
            $table->integer('modversion_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collection_modversion');
	}

}
