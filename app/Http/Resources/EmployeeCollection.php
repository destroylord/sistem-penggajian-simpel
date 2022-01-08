<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EmployeeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $collection = $this->collection;


        $collection->transform(function ($item, $key) {

            $firstname = explode(" ", $item['name_employee'])[0];

            $item = [
                'name_employee' => strtoupper($firstname),
                'total_salary'  => number_format($item['total_salary'], 0,',','.')
            ];

            return $item;
        });

        return [
            "data" => $this->collection
        ];
    }
}
