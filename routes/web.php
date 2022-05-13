<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('layouts.login.welcome');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('authLogin' ,[AuthController::class, 'login'])->name('authLogin');


Route::get('regis', [RegisterController::class, 'index'])->name('regis');
Route::post('register' ,[RegisterController::class, 'register'])->name('register');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/main', function () {
    return view('layouts.main');
});

Route::group(['middleware' => ['cek_login']], function () {
    Route::get('/beranda', function () {
        return view('beranda');
    });
    Route::get('/pelecehan', function () {
        return view('pelecehan');
    });
    
    Route::get('/km', function () {
        return view('km');
    });
    
    Route::get('/riwayat', function () {
        return view('riwayat',[
            "judul" => "Pelecehan seksual oleh oknum dibawah umur",
            "waktu" => "01 Januari 2000"    
        ]);
    });
    
    Route::get('/perundungan', function () {
        return view('perundungan');
    });
    
    Route::get('/ulasan', function () {
        return view('ulasan');
    });
});


