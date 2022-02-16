<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('admin/medico/pdf',[App\Http\Controllers\DoctorController::class,'pdf'])->name('admin/medico.pdf');

Route::resource('admin/aprendiz',ApprenticeController::class);
Route::resource('admin/medico', DoctorController::class);
Route::resource('admin/user', UserController::class);


Route::resource('/admin', HomeController::class);
