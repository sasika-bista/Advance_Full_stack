<?php

use App\Http\Controllers\StudentController;
use illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);