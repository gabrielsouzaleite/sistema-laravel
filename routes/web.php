<?php

use App\Http\Controllers\{DepartmentController, HomeController, LoginController, OfficeController, UserController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::resource('/departments', DepartmentController::class)->except(['show']);
Route::resource('/offices', OfficeController::class)->except(['show']);
Route::resource('/users', UserController::class)->except(['show']);
