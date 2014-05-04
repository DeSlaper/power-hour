<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hours', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')
                  ->unsigned()
                  ->index();
            $table->integer('project_id')
                  ->unsigned()
                  ->index();
            $table->integer('minutes_spend');
			$table->timestamps();

            $table->foreign('user_id','user_id_fk_idx')
                  ->references('id')
                  ->on('users');
            $table->foreign('project_id', 'project_id_fk_idx')
                  ->references('id')
                  ->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hours');
	}

}
