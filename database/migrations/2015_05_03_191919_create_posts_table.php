<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('post_type', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('label');
            $table->string('name');
            $table->boolean('status');
            $table->timestamps();
        });

		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('slug');
            $table->integer('user_id')->unsigned();
            $table->integer('post_type')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->string('label');
            $table->timestamp('published_at');


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('post_type')
                  ->references('id')
                  ->on('post_type')
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

        Schema::drop('post_type');
        Schema::drop('posts');
	}

}
