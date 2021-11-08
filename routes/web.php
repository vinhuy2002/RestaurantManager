<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\LogAndReg;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Register;
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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     $path = view("admin.trangchu.trangchu");
//     return view('admin.index')->with('route',$path);
// })->name('');

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

// Route::post('/admin/dashboard', [MainController::class, 'storeReg'])->name('admin.dashboard');