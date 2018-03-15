<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('block_identifier');
            $table->int('block_number');
						$table->int('block_year');
            $table->datetime('block_start_date');
						$table->datetime('block_end_date');
        });
				DB::table('blocks')->insert(
        array([
            'block_identifier' => 'Blk01',
            'block_number' => 1,
						'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk02',
		         	'block_number' => 2,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk03',
		         	'block_number' => 3,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk04',
		         	'block_number' => 4,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk05',
		         	'block_number' => 5,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk06',
		         	'block_number' => 6,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk07',
		         	'block_number' => 7,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk08',
		         	'block_number' => 8,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk09',
		         	'block_number' => 9,
							'block_year' => '2018'
						],
						[
		         	'block_identifier' => 'Blk10',
		         	'block_number' => 10,
							'block_year' => '2018'
						],
						[
							'block_identifier' => 'Blk11',
							'block_number' => 11,
							'block_year' => '2018'
						],
						[
							'block_identifier' => 'Blk12',
							'block_number' => 12,
							'block_year' => '2018'
						],
						[
							'block_identifier' => 'Blk13',
							'block_number' => 13,
							'block_year' => '2018'
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
		 Schema::drop('blocks');
	}

}
