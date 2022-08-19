<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;

use App\Http\Controllers\Penilai;

use App\Http\Controllers\UserController;

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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', [Home::class, 'home']);
Route::get('/destination', [Home::class, 'destination']);
Route::get('/single_destination/{id_destination}', [Home::class, 'singleDestination']);
Route::get('/berita', [Home::class, 'berita']);
Route::get('/berita/{id_berita}', [Home::class, 'singleBerita']);
Route::get('/full_map', [Home::class, 'fullMap']);
Route::get('/penginapan', [Home::class, 'penginapan']);
Route::get('/single_penginapan/{id_penginapan}', [Home::class, 'singlePenginapan']);
Route::get('/kuliner', [Home::class, 'kuliner']);
Route::get('/single_kuliner/{id_kuliner}', [Home::class, 'singleKuliner']);


Route::get('/tentang_aplikasi', [Home::class, 'tentangAplikasi']);


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,user']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);
        Route::get('/destination', [Admin::class, 'destination']);
        Route::get('/berita', [Admin::class, 'berita']);
        Route::get('/penginapan', [Admin::class, 'penginapan']);
        Route::get('/kuliner', [Admin::class, 'kuliner']);

        // CRUD PENGINAPAN
        Route::post('/tambah_penginapan', [Admin::class, 'tambahPenginapan']);
        Route::post('/ubah_penginapan', [Admin::class, 'ubahPenginapan']);
        Route::post('/hapus_penginapan', [Admin::class, 'hapusPenginapan']);

        // CRUD BERITA
        Route::post('/tambah_berita', [Admin::class, 'tambahBerita']);
        Route::post('/ubah_berita', [Admin::class, 'ubahBerita']);
        Route::post('/hapus_berita', [Admin::class, 'hapusBerita']);

        // CRUD KULINER
        Route::post('/tambah_kuliner', [Admin::class, 'tambahKuliner']);
        Route::post('/ubah_kuliner', [Admin::class, 'ubahKuliner']);
        Route::post('/hapus_kuliner', [Admin::class, 'hapusKuliner']);


        // CRUD DESTINATION
        Route::post('/tambah_destination', [Admin::class, 'tambahDestination']);
        Route::post('/ubah_destination', [Admin::class, 'ubahDestination']);
        Route::post('/hapus_destination', [Admin::class, 'hapusDestination']);

        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);
    });
});
