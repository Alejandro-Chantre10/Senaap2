<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/medico/pdf',[App\Http\Controllers\DoctorController::class,'pdf'])->name('admin/medico.pdf');

Route::resource('admin/aprendiz',ApprenticeController::class);
Route::resource('admin/medico', DoctorController::class);


Route::resource('/admin', HomeController::class);
