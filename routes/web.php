<?php

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

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// ROUTE ADMIN
Route::get('/menu-admin', function () {
    return view('admin/daftarBooking');
});

Route::get('/kelola-jasa', function () {
    return view('admin/kelolaJasa');
});

Route::get('/kelola-akun', function () {
    return view('admin/kelolaAkun');
});

Route::get('/riwayat', function () {
    return view('admin/riwayat');
});


// ROUTE USER
Route::get('/menu', function () {
    return view('user/home');
});

Route::get('/edit-akun', function () {
    return view('user/editAkun');
});