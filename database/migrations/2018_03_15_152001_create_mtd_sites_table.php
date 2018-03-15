<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtdSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mtd_sites', function (Blueprint $table) {
			$table->increments('id');
			$table->string('site_identifier');
			$table->string('name');;
		 });

		 DB::table('mtd_sites')->insert(
        array([
            'site_identifier' => 'TOH',
            'name' => 'The Ottawa Hospital'
					],
					[
						'site_identifier' => 'CHEO',
						'name' => 'Childrens Hospital of East Ontario'
					],
					[
						'site_identifier' => 'MFT',
						'name' => 'Monfort'
					]

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
		Schema::drop('mtd_sites');
	}

}
