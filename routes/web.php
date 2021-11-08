<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MonAnController;

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

// User View
Route::get('/', [MainController::class, 'index']);

Route::get('/GioiThieu', [MainController::class, 'aboutUs']);


// Admin View
Route::post('/auth/save', [MainController::class, 'storeReg'])->name('registerStore');
Route::post('/RestaurantManager/User', [MainController::class, 'loginCheck'])->name('admin.dashboard');

Route::get('/RestaurantManager/User/{slug}', [MainController::class, 'dieuhuong']);
Route::get('/RestaurantManager/User/{slug}/{slug2}', [AdminController::class, 'dieuhuong2']);

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

// Route::post('/admin/dashboard', [MainController::class, 'storeReg'])->name('admin.dashboard');

// Món ăn
Route::get('/RestaurantManager/User/monan/monan', [MonAnController::class, 'show']);
Route::post('/RestaurantManager/User/monan/them', [MonAnController::class, 'store']);
Route::get('/RestaurantManager/User/monan/xoa/id={id}', [MonAnController::class, 'destroy']);
// Route::get('/RestaurantManager/User/monan/monan/xoa/{id}', [MonAnController::class, 'destroy']);
Route::get('/RestaurantManager/User/monan/sua/id={id}', [MonAnController::class, 'edit']);
Route::post('/RestaurantManager/User/monan/sua', [MonAnController::class, 'update']);
