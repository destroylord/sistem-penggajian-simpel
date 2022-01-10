<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeSalaryCollection;
use App\Models\EmployeeSalary;
use App\Http\Requests\EmployeeSalaryRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helpers\Salary;
use App\Jobs\EmployeeSalaryJob;

class EmployeeSalaryController extends Controller
{
    public function index()
    {
        return new EmployeeSalaryCollection(EmployeeSalary::paginate());
    }

    public function filter($year, $month)
    {
        return new EmployeeSalaryCollection(
            EmployeeSalary::whereYear('date_time', '=', $year)
                                        ->whereMonth('date_time', '=', $month)
                                        ->get()
            );
    }

    public function store(EmployeeSalaryRequest $request)
    {

        $attr = new EmployeeSalary();
        $attr = $request->employees_id;

        $employee = Employee::where('id', $attr)->first();

        if (!Salary::checkMonth($employee->id, date("Y-m"))) {
          return response()
                    ->json([
                        'status' => 422,
                        'message' => 'Tidak boleh sama dibulan ini',
                    ], 422);
        }

        EmployeeSalary::create(array_merge(
            $request->getAttributes(), [
                    'total_accepted' => $employee->total_salary,
                ]
        ));

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambahkan data',
            'data' => $attr
        ],200);
    }

    public function batch(Request $request)
    {

        $employees = [];

        foreach ($request->all() as $key ) {
            $employee = Employee::where('id', $key['employees_id'])->first();
            $employees[] = $employee;

            if (!Salary::checkMonth($employee->id, date("Y-m"))) {
            return response()
                        ->json([
                            'status' => 422,
                            'message' => 'Tidak boleh sama dibulan ini',
                        ], 422);
            }
        }

        EmployeeSalaryJob::dispatch($employees);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambahkan data'
        ],200);

    }
}
