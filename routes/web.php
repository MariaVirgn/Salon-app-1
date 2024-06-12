<?php

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
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [AuthController::class, 'register']);

// customer
Route::get('/menu', function(){
    return view('welcome');
})->name('cust_menu');

// admin
Route::get('/menu-admin', function () {
    return view('admin/home');
})->name('admin_menu');

