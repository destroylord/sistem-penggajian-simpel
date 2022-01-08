<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name_employee' => 'required|unique:employees|max:10',
            'total_salary'  => 'required|integer|between:4000000,10000000'
        ];
    }

    public function getAttributes()
    {
        return array_merge(
            $this->only(['name_employee', 'total_salary'])
        );
    }
}
