<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemuaController;


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

Route::get('/', [SemuaController::class, 'beranda']);
Route::get('/tentang', [SemuaController::class, 'tentang']);
Route::get('/menu', [SemuaController::class, 'menu']);
Route::get('/contact', [SemuaController::class, 'contact']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/login', [SemuaController::class, 'login']);
Route::get('/register', [SemuaController::class, 'register']);

