<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;


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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login',[AllController::class,'login'])->name('login');
Route::get('/register',[AllController::class,'register'])->name('register');
