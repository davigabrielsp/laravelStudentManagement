<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;


Route::get('/', action: [StudentController::class, 'index'])->name('app.index');
Route::get('/create', action: [StudentController::class, 'create'])->name('app.create');
Route::post('/student', action: [StudentController::class, 'store'])->name('app.store');
