<?php

namespace Database\Seeders;

use App\Models\EmployeeSalary;
use Illuminate\Database\Seeder;

class EmployeeSalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeSalary::factory()->times(3)->create();
    }
}
