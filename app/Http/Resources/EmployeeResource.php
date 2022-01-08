<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public $collects = Employee::class;

    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'            => $this->id,
            'name_employee' => $this->name_employee,
            'total_salary'  => $this->total_salary,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at
        ];
    }
}
