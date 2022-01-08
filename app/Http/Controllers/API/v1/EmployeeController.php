<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeCollection;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index()
   {

    return new EmployeeCollection(Employee::paginate());

   }


   public function store(EmployeeRequest $request)
   {
        $data = Employee::create($request->getAttributes());

        return response()->json([
            'status' => 201,
            'message' => 'Created Succesfully!',
            'data' => $data
        ], 201);

   }
}
