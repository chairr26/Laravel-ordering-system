<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'shop'])->name('shop');
Route::get('dashboard', [ProductController::class, 'index']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('admin-login', [UserController::class, 'adminlogin'])->name('login.admin');
Route::get('registration', [UserController::class, 'registration'])->name('register-admin');
Route::post('admin-registration', [UserController::class, 'adminRegistration'])->name('register.admin');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
Route::resource('products', ProductController::class);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('cart_remove/{id}', [ProductController::class, 'remove'])->name('cart_remove');
