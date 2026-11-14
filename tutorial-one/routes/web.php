<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);