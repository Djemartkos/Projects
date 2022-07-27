<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('course',[App\Http\Controllers\CourseController::class,'index'])->name('course.');
Route::get('cunit',[App\Http\Controllers\CUnitController::class,'index'])->name('cunit.');
Route::get('student',[App\Http\Controllers\StudentController::class,'index'])->name('student.');
