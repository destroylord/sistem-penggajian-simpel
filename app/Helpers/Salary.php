<?php

namespace App\Helpers;
use App\Models\EmployeeSalary;
use DateTime;

class Salary
{
    public static function checkMonth($id, $time) {

        $date = new DateTime($time);

        $employeeSalary = EmployeeSalary::where('employees_id', $id)
                        ->whereMonth('date_time', $date->format('m'))
                        ->whereYear('date_time', $date->format('Y'))
                        ->get()->toArray();

        return empty($employeeSalary);
    }
}

