<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundingCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funding_codes', function (Blueprint $table) {
				 $table->increments('id');
				 $table->string('funding_identifier');
				 $table->string('funding_code_detail');
				 $table->string('funding_code_comment');
				 $table->integer('block_id');
				 $table->integer('claim_type_id');
		 });
		 DB::table('funding_codes')->insert(
        array(
					[
            'funding_identifier' => '9901',
            'funding_code_detail' => 'MOH Funding',
					],
					[
            'funding_identifier' => '9905',
            'funding_code_detail' => 'MOH OIMG Funding'
					],
					[
            'funding_identifier' => '9909',
            'funding_code_detail' => 'MOH Trasfer Fund',
						'block_id' => 1,
						'claim_type_id'=> 1
					],
					[
            'funding_identifier' => '9994',
            'funding_code_detail' => 'Return from Leave Status',
						'block_id' => 1,
						'claim_type_id'=> 2
					],
					[
						'funding_identifier' => '9902',
						'funding_code_detail' => 'MOH CIP Funding',
						'block_id' => 1,
						'claim_type_id'=> 3
					],
					[
						'funding_identifier' => '9906',
						'funding_code_detail' => 'MOH DIMG Funding',
						'block_id' => 1,
						'claim_type_id'=> 4
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
		Schema::drop('funding_codes');
	}

}
