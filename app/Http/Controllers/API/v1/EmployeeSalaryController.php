<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeSalaryCollection;
use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    public function index()
    {
        return new EmployeeSalaryCollection(EmployeeSalary::paginate());
    }
}
