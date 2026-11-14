<?php

use App\Http\Controllers\StudentController;
use illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');

Route::get('student/create', [StudentController::class,'create'])
    ->name('students.create');

Route::post('/students', [Studentcontroller::Class, 'store'])
    ->name('students.show');

Route::get('/students/{id}', [StudentController::class, 'show'])
    ->name('students.show');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])
    ->name('students.edit');

Route::put('/students/{id}', [Studentcontroller::Class, 'update'] )
    ->name('students.update');

Route::delete('/students/{id}', [Studentcontroller::class, 'destroy'])
    ->name('students.destroy');