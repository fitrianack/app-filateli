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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DashboardController@index')->name('home');

Auth::routes();
Route::get('/kategori', 'DashboardController@kategori')->name('kategori');
Route::get('/donasi', 'DashboardController@donasi')->name('donasi');
Route::get('/paket_perlombaan', 'DashboardController@paket_perlombaan')->name('paket_perlombaan');
Route::get('/pembayaran', 'DashboardController@pembayaran')->name('pembayaran');
Route::get('/periode_range', 'DashboardController@periode_range')->name('periode_range');
Route::get('/pendaftaran', 'DashboardController@pendaftaran')->name('pendaftaran');
