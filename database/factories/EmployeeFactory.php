<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;


    public function definition()
    {
        return [
            'name_employee' => $this->faker->name($gender = 'male' | 'female'),
            'total_salary' => 5000,
        ];
    }
}
