<?php

namespace Database\Factories;

use App\Models\EmployeeSalary;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeSalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = EmployeeSalary::class;


    public function definition()
    {
        $total_accepted = rand(10000, 50000);

        return [
            'employees_id' => rand(1,25),
            'total_accepted' => $total_accepted,
            'date_time' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
