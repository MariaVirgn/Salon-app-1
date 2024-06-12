<?php

use App\Http\Controllers\JasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
// auth
Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// customer
Route::get('/menu', function () {
    return view('user/home');
})->name('cust_menu');
Route::get('/read', [JasaController::class, 'read'])->name('read_jasa');

Route::get('/edit-akun', function () {
    return view('user/editAkun');
});
Route::get('/booking', function () {
    return view('user/booking');
});

// Admin
Route::get('/menu-admin', function () {
    return view('admin/daftarBooking');
})->name('admin_menu');

Route::get('/kelola-jasa', function () {
    return view('admin/kelolaJasa');
});

Route::get('/kelola-akun', function () {
    return view('admin/kelolaAkun');
});

Route::get('/riwayat', function () {
    return view('admin/riwayat');
});