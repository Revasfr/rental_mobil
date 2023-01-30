<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('form_pemesanan');
});
// Login & Registrasi
Route::get('/login', [LoginController::class, 'index']);
Route::get('/registrasi', [RegisterController::class, 'index']);

Route::get('/', [\App\Http\Controllers\HomeController:: class, 'index'])->name('homepage');


Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

