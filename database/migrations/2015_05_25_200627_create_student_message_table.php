<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_message', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('student_name');
            $table->integer('user_id')->unsigned();
            $table->string('message');
            $table->string('student_image');
            $table->timestamp('published_at');
			$table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_message');
	}

}
