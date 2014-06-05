<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('name');
            $table->string('solder_version');
            $table->string('platform_key');
            $table->integer('user_id');
            $table->string('background');
            $table->string('icon');
            $table->string('logo');
            $table->boolean('solder_enabled');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collections');
	}

}
