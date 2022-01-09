<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $dates = ['date_time'];
    protected $table = 'employee_salaries';


    protected $fillable =
    [
        'employees_id',
        'total_accepted',
        'date_time'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
