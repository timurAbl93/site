<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            
            Schema::create('feedbacks', function(Blueprint $table)
            {
                    $table->increments('id');
                    $table->timestamps();
                    $table->string('email');
                    $table->string('userName');
                    $table->string('jobs');
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
		Schema::drop('feedbacks');
	}

}
