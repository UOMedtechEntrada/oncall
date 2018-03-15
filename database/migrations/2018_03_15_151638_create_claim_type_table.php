<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('claim_types', function (Blueprint $table) {
					 $table->increments('id');
					 $table->string('name');
			 });
			 DB::table('claim_types')->insert(
			 array(
				 	[
					 		'name' => 'In Hospital',
					 ],
					 [
							'name' => 'Out of Hospital',
					 ],
					 [
							'name' => 'Qualifying',
					 ],
					 [
						 	'name' => 'Dimention of Care',
					 ],
					 [
						 	'name' => 'Rounding',
					 ]

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	 	Schema::drop('blocks');
	}

}
