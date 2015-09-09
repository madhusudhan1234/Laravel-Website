<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('label');
            $table->string('url');
            $table->string('target');
            $table->integer('position');
            $table->boolean('status');
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
		Schema::drop('navigations');
	}

}
