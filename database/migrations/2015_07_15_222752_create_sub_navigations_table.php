<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubNavigationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('sub_navigations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('main_nav_id')->unsigned();
            $table->string('label');
            $table->string('url');
            $table->string('target');
            $table->integer('position');
            $table->boolean('status');
            $table->foreign('main_nav_id')
                ->references('id')
                ->on('navigations')
                ->onDelete('cascade');
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
		Schema::drop('sub_navigations');
	}

}
