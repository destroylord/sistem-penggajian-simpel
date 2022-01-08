<?php

use App\Http\Controllers\API\v1\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix" => "v1/employee"], function(){
    Route::get('/', [EmployeeController::class, 'index']);
    Route::post('/store', [EmployeeController::class, 'store']);
});
