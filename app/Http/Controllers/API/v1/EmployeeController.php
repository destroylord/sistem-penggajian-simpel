<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index()
   {

    $employee = Employee::all();
    // return EmployeeResource::collection($employee);
    return new EmployeeCollection(Employee::paginate());

   }
}
