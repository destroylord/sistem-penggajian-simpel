<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'employees';

    protected $fillable =
    [
        'name_employee',
        'total_salary'
    ];
}
