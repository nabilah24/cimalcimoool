<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\ShoppingCart;


// web utama
Route::get('/', [AllController::class, 'index']);

Route::get('/shopping-cart', [CartController::class, 'menuCart'])->name('shopping.cart');
Route::get('/menu/{id}', [CartController::class, 'addMenutoCart'])->name('addmenu.to.cart');
Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/shopping-cart/{id}', [CartController::class, 'destroy'])->name('delete.cart.item');
Route::get('/bill-show', [CartController::class, 'billShow'])->name('bill.show');
Route::get('/getPrice/{id}', [CartController::class, 'getPrice'])->name('total.price');
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

// crud webAdmin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AllController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/user', [AllController::class, 'user'])->name('admin.user');
    Route::get('/tables', [AllController::class, 'tables'])->name('admin.tables');
    Route::get('/maps', [AllController::class, 'maps'])->name('admin.maps');
    Route::get('/userProfile', [AllController::class, 'userProfile'])->name('admin.userProfile');
});

Route::resource('/adminMenu', MenuController::class);

// user
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AllController::class, 'home'])->name('weUtama.home');
    Route::get('/about', [AllController::class, 'about']);
    Route::get('/menu', [AllController::class, 'menu']);
    Route::get('/contact', [AllController::class, 'contact']);
    Route::get('/shopping-cart', [CartController::class, 'menuCart'])->name('shopping.cart');
    Route::get('/menu/{id}', [CartController::class, 'addMenutoCart'])->name('addmenu.to.cart');
    Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.shopping.cart');
    Route::delete('/shopping-cart/{id}', [CartController::class, 'destroy'])->name('delete.cart.item');
    Route::get('/bill-show', [CartController::class, 'billShow'])->name('bill.show');
    Route::get('/getPrice/{id}', [CartController::class, 'getPrice'])->name('total.price');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

    //forgotpassword
    Route::get('/forgot-password', [UserController::class, 'showLinkRequestForm'])->name('forgot-password');
    Route::post('/forgotpassword-act', [UserController::class, 'sendResetLinkEmail'])->name('forgotpassword-act');

    Route::get('/validasi-forgot-password/{token}', [UserController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
    Route::post('/validasi-forgot-password-act', [UserController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/viewcontact', [ContactController::class, 'viewContact'])->name('admin.viewcontact');

    Route::get('/dashboard', [AllController::class, 'getUsersCount'])->name('dashboard');

    // logout
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});

// login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action']);

//register
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register_action']);



Route::get('/profile', function () {
    $user = Auth::user();

    return view('weUtama.profile', ['user' => $user]);
})->middleware('auth')->name('profile');



// Route::get('/updateprofile', 'ProfileController@updateProfile')->name('updateprofile');
// Route::post('/updateprofile', 'ProfileController@updateProfileSubmit')->name('updateprofile.submit');

// Route::get('/profile', 'ProfileController@showProfile')->name('profile');
// Route::get('/updateprofile', 'ProfileController@showUpdateProfile')->name('updateprofile');
// Route::post('/updateprofile', 'ProfileController@updateProfile')->name('updateprofile.submit');

// Route::get('/bill', [CartController::class, 'billShow'])->name('bill.show');
// Route::get('/getPrice/{id}', [CartController::class, 'getPrice'])->name('total.price');
// Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
// Route::post('/checkout', [CartController::class, 'store'])->name('checkout.store');
// routes/web.php
// Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
// Route::post('/contact', [ContactController::class, 'store'])->name('weUtama.contact');
