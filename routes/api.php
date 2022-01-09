<?php

use App\Http\Controllers\API\v1\EmployeeController;
use App\Http\Controllers\API\v1\EmployeeSalaryController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "v1/employee"], function(){
    // Employee
    Route::get('/', [EmployeeController::class, 'index']);
    Route::post('/store', [EmployeeController::class, 'store']);

    // Employee Salary
    Route::get('/salary', [EmployeeSalaryController::class, 'index']);
    Route::get('/salary/{year}/{month}', [EmployeeSalaryController::class, 'filter']);
    Route::post('/salary/store', [EmployeeSalaryController::class, 'store']);
    Route::post('/salary/batch', [EmployeeSalaryController::class, 'batch']);

});
