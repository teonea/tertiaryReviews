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
			$table->increments('schoolID');
			$table->text('schoolName');
			$table->text('schoolPhone');
			$table->text('schoolFax');
			$table->text('schoolWebsite');
			$table->text('schoolType');
			$table->text('schoolAuthority');
			$table->text('schoolStreet');
			$table->text('schoolSuburb');
			$table->text('schoolCity');
			$table->text('schoolPostalAddress1');
			$table->text('schoolPostalAddress2');
			$table->text('schoolPostCode');
			$table->text('regionName');
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
		Schema::drop('schools');
	}

}
