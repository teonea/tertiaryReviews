<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('schoolName');
			$table->text('schoolPhone');
			$table->text('schoolFax');
			$table->text('schoolWebsite');
			$table->text('schoolType');
			$table->text('schoolAuthority');
			$table->text('schoolStreet');
			$table->text('schoolSuburb');
			$table->text('schoolCity');
			$table->text('regionName');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schools');
	}

}
