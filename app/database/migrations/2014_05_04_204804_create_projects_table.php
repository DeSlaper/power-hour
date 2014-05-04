<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->string('code')
                  ->nullable();
            $table->integer('creator_id')
                  ->unsigned();

			$table->timestamps();

            $table->foreign('creator_id','creator_fk_idx')
                  ->references('id')
                  ->on('users')
                  ->onDelete(DB::raw('set null'));

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
