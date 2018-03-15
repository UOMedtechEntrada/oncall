<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterClaimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('master_claims', function (Blueprint $table) {
				 $table->increments('id');
				 $table->string('number');
				 $table->string('user_id');
				 $table->string('name');
				 $table->datetime('claim_date');
				 $table->integer('block_id');
				 $table->integer('service_id');
				 $table->integer('site_id');
				 $table->integer('claim_type_id');
				 $table->string('payment_approved');
				 $table->datetime('created_date');

		 });
		 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mtd_services');
	}

}
