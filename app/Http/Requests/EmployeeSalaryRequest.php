<?php

namespace App\Http\Requests;

use App\Models\EmployeeSalary;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeSalaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employees_id'      => 'required|unique:employee_salaries',
        ];
    }

    public function withValidator($validator)
    {
        $validator->addExtension('uniqMont', function ($attribute, $value, $parameter, $validator) {
            return ! EmployeeSalary::where('employees_id', $id)->whereMonth('date_time', $bulan)->exists();
        });
    }

    public function getAttributes()
    {
        return array_merge(
            $this->only(['employees_id'])
        );
    }
}
