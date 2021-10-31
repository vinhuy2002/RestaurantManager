<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\LogAndReg;
use App\Http\Controllers\LoginAndRegisterController;
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
Route::get('/', [FirstController::class, 'index']);

Route::get('/GioiThieu', [FirstController::class, 'aboutus']);


// Admin View
Route::get('/RestaurantManager/User', [AdminController::class, 'index']);


// Route::get('/RestaurantManager/User/{slug}', function($slug){

//     $path = __DIR__ . "/../resources/post/{$slug}.blade.php";
//     $dieuhuong = file_get_contents($path);
//     return view('admin.index', [
//         "route" => $dieuhuong,
//     ]);
// });

Route::get('/RestaurantManager/User/{slug}', [AdminController::class, 'dieuhuong']);
Route::get('/tests', [LogAndReg::class, 'login']);

// Route::resource('/Register', LoginAndRegisterController::class);
Route::resource('/Register', Register::class);