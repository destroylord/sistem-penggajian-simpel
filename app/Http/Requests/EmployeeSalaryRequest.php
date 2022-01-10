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
            'employees_id'      => 'required|uniqMont',
        ];
    }

    public function withValidator($validator)
    {
        $validator->addExtension('uniqMont', function ($attribute, $value, $parameter, $validator) {

            echo '<pre>';
            echo '1';
            var_dump($attribute);
            echo '</pre>';


            echo '<pre>';
            echo '2';
            var_dump($value);
            echo '</pre>';


            echo '<pre>';
            echo '3';
            var_dump($parameter);
            echo '</pre>';

            
            echo '<pre>';
            echo '4';
            var_dump($validator);
            echo '</pre>';

            // return ! EmployeeSalary::where('employees_id', $id)->whereMonth('date_time', $bulan)->exists();
        });
    }

    public function getAttributes()
    {
        return array_merge(
            $this->only(['employees_id'])
        );
    }
}
