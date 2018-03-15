<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rules', function (Blueprint $table) {
				 $table->increments('id');
				 $table->string('type');
				 $table->integer('days');
		 });

		 DB::table('rules')->insert(
        array(
            'type' => 'xdays',
            'days' => 60
        )
    );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rules');
	}

}
