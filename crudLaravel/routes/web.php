<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [MenuController::class, 'landing']);
Route::get('/info', [MenuController::class, 'info']);
//Route::get('/student', [MenuController::class, 'student']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('student', StudentController::class)->middleware('can:isAdmin');
Route::resource('student', StudentController::class)->only('show')->middleware('can:isAdminStudent');

Route::resource('user', UserController::class)->middleware('can:isAdmin');
