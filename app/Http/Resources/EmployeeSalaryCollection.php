<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EmployeeSalaryCollection extends ResourceCollection
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

            $date = date_create($item['date_time']);
            $item = [
                'total_salary'  => number_format($item['total_accepted'], 0,',','.'),
                'date_time'     => date_format($date, "D/M/Y H:m")
            ];

            return $item;
        });

        return [
            'data' => $this->collection
        ];
    }
}
