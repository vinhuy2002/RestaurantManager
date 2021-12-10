<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\DatMonController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\LichLamViecController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DoanhThuController;

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
//
Route::get('/clear-cache', function(){
    $exitCode = Artisan::call('cache:clear');
});

// User View
Route::get('/', [MainController::class, 'index']);

Route::get('/GioiThieu', [MainController::class, 'aboutUs']);

Route::get('/NhaHang', [MainController::class, 'nhahang']);
Route::get('/NhaHang/nha-hang={slug}', [MainController::class, 'idnhahang']);
Route::post('/NhaHang/nha-hang={id}/datban', [MainController::class, 'datban']);

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
Route::post('/auth/save', [MainController::class, 'storeReg'])->name('registerStore');
Route::get('/auth/logoff', [MainController::class, 'dangXuat'])->name('auth.logoff');

//Check Login or not
// Route::group(['middleware'=>['CheckLogin']], function(){
    // Admin View

Route::post('/RestaurantManager/User', [MainController::class, 'loginCheck'])->name('admin.dashboard');

Route::get('/RestaurantManager/User/{slug}', [MainController::class, 'dieuhuong']);
Route::get('/RestaurantManager/User/{slug}/{slug2}', [MainController::class, 'dieuhuong2']);



// Route::post('/admin/dashboard', [MainController::class, 'storeReg'])->name('admin.dashboard');

// Trang chủ
Route::get('/RestaurantManager/User/trangchu/sua/id={id}', [MainController::class, 'edit']);
Route::post('/RestaurantManager/User/trangchu/sua', [MainController::class, 'update']);
Route::get('/RestaurantManager/User/trangchu/xoa/id={id}', [MainController::class, 'destroy']);

// Món ăn
Route::get('/RestaurantManager/User/monan/monan', [MonAnController::class, 'show']);
Route::post('/RestaurantManager/User/monan/them', [MonAnController::class, 'store']);
Route::get('/RestaurantManager/User/monan/xoa/id={id}', [MonAnController::class, 'destroy']);
Route::get('/RestaurantManager/User/monan/sua/id={id}', [MonAnController::class, 'edit']);
Route::post('/RestaurantManager/User/monan/sua', [MonAnController::class, 'update']);

// Đặt món
Route::get('/RestaurantManager/User/datmon/datmon', [DatMonController::class, 'show']);
Route::post('/RestaurantManager/User/datmon/them', [DatMonController::class, 'store']);
Route::get('/RestaurantManager/User/datmon/xoa/id={id}', [DatMonController::class, 'destroy']);
Route::get('/RestaurantManager/User/datmon/sua/id={id}', [DatMonController::class, 'edit']);
Route::post('/RestaurantManager/User/datmon/sua', [DatMonController::class, 'update']);
Route::post('/RestaurantManager/User/datmon/thanhtoan', [DatMonController::class, 'thanhtoan']);
Route::post('/RestaurantManager/User/datmon/chuyenban', [DatMonController::class, 'chuyenban']);
Route::get('/RestaurantManager/User/datmon/xoa_du_lieu_ban/ban={ban}', [DatMonController::class, 'xoadulieuban']);

// Nguyên liệu
Route::get('/RestaurantManager/User/nguyenlieu/nguyenlieu', [NguyenLieuController::class, 'show']);
Route::post('/RestaurantManager/User/nguyenlieu/them', [NguyenLieuController::class, 'store']);
Route::get('/RestaurantManager/User/nguyenlieu/xoa/id={id}', [NguyenLieuController::class, 'destroy']);
Route::get('/RestaurantManager/User/nguyenlieu/sua/id={id}', [NguyenLieuController::class, 'edit']);
Route::post('/RestaurantManager/User/nguyenlieu/sua', [NguyenLieuController::class, 'update']);

// Bàn
Route::get('/RestaurantManager/User/ban/ban', [BanController::class, 'show']);
Route::post('/RestaurantManager/User/ban/them', [BanController::class, 'store']);
Route::get('/RestaurantManager/User/ban/xoa/id={id}', [BanController::class, 'destroy']);
Route::get('/RestaurantManager/User/ban/sua/id={id}', [BanController::class, 'edit']);
Route::get('/RestaurantManager/User/ban/xem/id={id}', [BanController::class, 'xem']);
Route::post('/RestaurantManager/User/ban/sua', [BanController::class, 'update']);
Route::get('/RestaurantManager/User/ban/datban', [BanController::class, 'datban']);
Route::post('/RestaurantManager/User/ban/datban', [BanController::class, 'datban']);

// Nhân viên
Route::get('/RestaurantManager/User/nhanvien/nhanvien', [NhanVienController::class, 'show']);
Route::get('/RestaurantManager/User/nhanvien/them', [NhanVienController::class, 'them']);
Route::post('/RestaurantManager/User/nhanvien/them', [NhanVienController::class, 'store']);
Route::get('/RestaurantManager/User/nhanvien/xoa/id={id}', [NhanVienController::class, 'destroy']);
Route::get('/RestaurantManager/User/nhanvien/sua/id={id}', [NhanVienController::class, 'edit']);
Route::get('/RestaurantManager/User/nhanvien/xem/id={id}', [NhanVienController::class, 'xem']);
Route::post('/RestaurantManager/User/nhanvien/sua', [NhanVienController::class, 'update']);

// Chức vụ
Route::get('/RestaurantManager/User/chucvu/chucvu', [ChucVuController::class, 'show']);
Route::post('/RestaurantManager/User/chucvu/them', [ChucVuController::class, 'store']);
Route::get('/RestaurantManager/User/chucvu/xoa/id={id}', [ChucVuController::class, 'destroy']);
Route::get('/RestaurantManager/User/chucvu/sua/id={id}', [ChucVuController::class, 'edit']);
Route::post('/RestaurantManager/User/chucvu/sua', [ChucVuController::class, 'update']);
Route::post('/RestaurantManager/User/chucvu/chucvumacdinh', [ChucVuController::class, 'chucvumacdinh']);

// Doanh thu
Route::get('/RestaurantManager/User/doanhthu/doanhthu', [DoanhThuController::class, 'show']);
Route::post('/RestaurantManager/User/doanhthu/thongke', [DoanhThuController::class, 'thongke']);
Route::post('/RestaurantManager/User/doanhthu/xuat', [DoanhThuController::class, 'export']);