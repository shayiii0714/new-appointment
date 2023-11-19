<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('services')->insert([
			[
				'name' => 'Transfer of Ownership',
				'created_at' => now(),
				'updated_at' => now(),
				],
			[
				'name' => 'New Applicant',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'New Franchise',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Renewal of Franchise',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Change of Motorcycle',
				'created_at' => now(),
				'updated_at' => now(),
			],
		]);
	}
}
