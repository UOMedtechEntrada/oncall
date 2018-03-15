<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtdServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mtd_services', function (Blueprint $table) {
				 $table->increments('id');
				 $table->string('service_identifier');
				 $table->string('service_name');
				 $table->string('service_resident_count');
				 $table->string('pa_email_address');

		 });
		 DB::table('mtd_services')->insert(
        array([
            'service_identifier' => 'AANE',
            'service_name' => 'Adult Anesthesiology',
						'service_resident_count' => '2',
            'pa_email_address' => ''
					],
					[
	            'service_identifier' => 'ADID',
	            'service_name' => 'Adult Infectious Desease',
							'service_resident_count' => '1',
	            'pa_email_address' => ''
					],
					[
	            'service_identifier' => 'ANEP',
	            'service_name' => 'Adult Nephrology',
							'service_resident_count' => '1',
	            'pa_email_address' => ''
					],
					[
	            'service_identifier' => 'AORS',
	            'service_name' => 'Adult Orthopedic Surgery',
							'service_resident_count' => '1',
	            'pa_email_address' => ''
					],
					[
	            'service_identifier' => 'ARES',
	            'service_name' => 'Adult Respirology',
							'service_resident_count' => '1',
	            'pa_email_address' => ''
					],
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
		Schema::drop('mtd_services');
	}

}
