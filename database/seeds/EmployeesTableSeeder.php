<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('employees')->insert([
      [
        'first_name' => 'Loise',
        'last_name' => 'Reina',
        'phone' => '+123 45 678 901',
        'email' => 'loise@example.com',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'phone' => '+123 45 678 902',
        'email' => 'jane@example.com',
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
