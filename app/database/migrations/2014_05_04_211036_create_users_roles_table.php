<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_roles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('role_id');
			$table->timestamps();

            $table->index(['user_id', 'role_id'],'user_role_idx');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_roles');
	}

}
