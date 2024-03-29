<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->text('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}