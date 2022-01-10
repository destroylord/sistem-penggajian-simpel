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
            'employees_id'      => 'required',
        ];
    }

    public function getAttributes()
    {
        return array_merge(
            $this->only(['employees_id'])
        );
    }
}
