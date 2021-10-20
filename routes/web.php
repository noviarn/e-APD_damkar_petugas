<?php

use Illuminate\Support\Facades\Route;

//controller sektor//
use App\Http\Controllers\AdminSektorController\VerifikasiController;
use App\Http\Controllers\AdminSektorController\VerifiedController;

//controller wilayah//
use App\Http\Controllers\AdminWilayahController\HomeController;
use App\Http\Controllers\AdminWilayahController\PegawaiController;
use App\Http\Controllers\AdminWilayahController\PegawaitestController;
use App\Http\Controllers\AdminWilayahController\SudinSelatan;
use App\Http\Controllers\AdminWilayahController\KebLamaController;
use App\Http\Controllers\AdminWilayahController\KebBaruController;
use App\Http\Controllers\AdminWilayahController\MprapatanController;
use App\Http\Controllers\AdminWilayahController\PesanggrahanController;
use App\Http\Controllers\AdminWilayahController\CilandakController;
use App\Http\Controllers\AdminWilayahController\TebetController;
use App\Http\Controllers\AdminWilayahController\SetiaBudiController;
use App\Http\Controllers\AdminWilayahController\PancoranController;
use App\Http\Controllers\AdminWilayahController\PsmingguController;
use App\Http\Controllers\AdminWilayahController\DetailAnggotaController;

//controller dinas//
use App\Http\Controllers\AdminDinasController\DashDinasController;
use App\Http\Controllers\AdminDinasController\WselatanController;
use App\Http\Controllers\AdminDinasController\TambahApdController;

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

Route::get('/', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/petugas/dashboard', 'App\Http\Controllers\PetugasController\DashboardController@berandaPetugas');
	Route::get('/petugas/profile', 'App\Http\Controllers\PetugasController\PetugasController@profilPetugas');
	Route::get('/petugas/dashboard/lapor-apd', 'App\Http\Controllers\PetugasController\PetugasController@berandaPetugasLaporAPD'); 
	Route::get('/petugas/dashboard/data-apd', 'App\Http\Controllers\PetugasController\PetugasController@berandaPetugasDataAPD'); 
	Route::get('/petugas/dashboard/standard-apd-pemadam', 'App\Http\Controllers\PetugasController\PetugasController@berandaPetugasStandardAPDPemadam');
	Route::get('/petugas/dashboard/lapor-apd/{id}/submit', 'App\Http\Controllers\PetugasController\PetugasController@submitAPD');
	Route::post('/petugas/dashboard/lapor-apd/{id}/submitted', 'App\Http\Controllers\PetugasController\PetugasController@APDsubmitted');  
	Route::get('/petugas/dashboard/data-apd/{id}/edit', 'App\Http\Controllers\PetugasController\PetugasController@editAPD');
	Route::post('/petugas/dashboard/data-apd/{id}/edited', 'App\Http\Controllers\PetugasController\PetugasController@APDedited');  
});

// Admin Sektor //
Route::get('/admin-sektor/dashboard', 'App\Http\Controllers\AdminSektorController\DashboardController@dashboard');
Route::get('/admin-sektor/dashboard/detail1/{NRK}', 'App\Http\Controllers\AdminSektorController\DashboardController@detail');
Route::get('/admin-sektor/verifikasi', 'App\Http\Controllers\AdminSektorController\VerifikasiController@verifikasi');
Route::get('/admin-sektor/verifikasi/detail2/{nrk}', [VerifikasiController::class, 'detail']);
Route::get('/admin-sektor/verifikasi/detail2/edit/{apd_id}', [VerifikasiController::class, 'edit']);
Route::get('/admin-sektor/verified', [VerifiedController::class, 'verified']);
Route::get('/admin-sektor/verified/detail3/{nrk}', [VerifiedController::class, 'detail']);

// Admin Wilayah //
Route::get('/admin_wilayah/dashboard', 'App\Http\Controllers\AdminWilayahController\DashboardController@index');
Route::get('/sudinselatan', [SudinSelatan::class, 'index']);
Route::get('/sudinselatan/detail/{NRK}', [PegawaiController::class, 'detail']);
Route::get('/sudinselatan/keblama', [KebLamaController::class, 'index']);
Route::get('/sudinselatan/kebbaru', [KebBaruController::class, 'index']);
Route::get('/sudinselatan/mprapatan', [MprapatanController::class, 'index']);
Route::get('/sudinselatan/pesanggrahan', [PesanggrahanController::class, 'index']);
Route::get('/sudinselatan/cilandak', [CilandakController::class, 'index']);
Route::get('/sudinselatan/tebet', [TebetController::class, 'index']);
Route::get('/sudinselatan/setiabudi', [SetiaBudiController::class, 'index']);
Route::get('/sudinselatan/pancoran', [PancoranController::class, 'index']);
Route::get('/sudinselatan/pasminggu', [PsmingguController::class, 'index']);
Route::get('/profile/admin-wilayah', 'App\Http\Controllers\AdminWilayahController\ProfileController@index');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/store',[PegawaiController::class, 'store']);
Route::get('/verifikasi', 'App\Http\Controllers\AdminWilayahController\VerifikasiController@index');
Route::get('/lihat-pegawai', 'PegawaitestController@index')->name('lihat-pegawai');
Route::get('/tambah-pegawai', 'PegawaitestController@create')->name('tambah-pegawai');
Route::post('/simpan-pegawai', 'PegawaitestController@store')->name('simpan-pegawai');

// Admin Dinas //
Route::get('/dash-dinas', [DashDinasController::class, 'index']);
Route::get('/dash-dinas/wilayah/{kode_wilayah}', [DashDinasController::class, 'detail']);
Route::get('/lihat-apd', 'TambahApdController@index')->name('lihat-apd');
Route::get('/tambah-apd', 'TambahApdController@create')->name('tambah-apd');
Route::post('/simpan-apd', 'TambahApdController@store')->name('simpan-apd');
