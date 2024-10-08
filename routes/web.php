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

Route::get('/profil', function () {
    return view('home/profil');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/profiledosen', function () {
    return view('profiledosen');
});

Route::get('/datamahasiswa', function () {
    return view('datamahasiswa');
});

Route::get('/logbookdosen', function () {
    return view('logbookdosen');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/bimbingandosen', function () {
    return view('bimbingandosen');
});

Route::get('/laporandosen', function () {
    return view('laporandosen');
});

Route::get('/penilaiandosen', function () {
    return view('penilaiandosen');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/profil', function () {
    return view('home/profil');
});

Route::get('/dosbing', function () {
    return view('home/dosbing');
});

Route::get('/formPengajuanDosbing', function () {
    return view('home/formPengajuanDosbing');
});

Route::get('/fixDosbing', function () {
    return view('home/fixDosbing');
});

Route::get('/pkl', function () {
    return view('home/pkl');
});

Route::get('/formPKL', function () {
    return view('home/formPKL');
});

Route::get('/formPKL', function () {
    return view('home/formPKL');
});
Route::get('/infoPKL', function () {
    return view('home/infoPKL');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profiledosen', function () {
    return view('profiledosen');
});

Route::get('/fixPKL', function () {
    return view('home/fixPKL');
});

Route::get('/logbook', function () {
    return view('home/logbook');
});

Route::get('/seminar', function () {
    return view('home/seminar');
});

Route::get('/fixSeminar', function () {
    return view('home/fixSeminar');
});

Route::get('/formPengajuanSeminar', function () {
    return view('home/formPengajuanSeminar');
});

Route::get('/laporan', function () {
    return view('home/laporan');
});

Route::get('/download', function () {
    return view('home/download');
});

Route::get('/tambahdatamahasiswa', function () {
    return view('tambahdatamahasiswa');
});

/*

| Jangan lupa php artisan route:clear

*/