<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PelangganController;
use App\Models\Golongan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});


Route::get('/user', function () {
    return view('users');
});

// Route untuk menampilkan form register
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
// Route untuk melakukan proses registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
// Route untuk melakukan proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('golongan', GolonganController::class,"index")->name('index');
// Route::get('/gol', [GolonganController::class, "index"]);

Route::resource('/gol', GolonganController::class)->middleware('auth');

Route::resource('/pel', PelangganController::class)->middleware('auth');



// Route::resource(
//     '/gol', GolonganController::class
// );