<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistrictsTable extends Migration {

	public function up()
	{
		Schema::create('districts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->integer('province_id')->unsigned()->nullable()->index();
		});
	}

	public function down()
	{
		Schema::drop('districts');
	}
}