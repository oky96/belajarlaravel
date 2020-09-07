<?php

use App\Http\Controllers\DatabarangController;
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
    return view('welcome');
});

// Route::get('/daftar', 'DatabarangController@index');


// Route::resource('kontak', 'KontakController');

// Route::view('/tabel.html', 'tampilantabel.tabel');

// Route::view('/tampilan', 'tampilancontroller');

// Route::get('/tampilantabel', 'DataserviceController@tabel2');
// Route::resource('service', 'ServiceController');

//servis route
Route::get('service', 'ServiceController@index');
Route::post('service/{id}', 'ServiceController@add');
Route::get('service/{id}', 'ServiceController@edit');
Route::put('service/{id}', 'ServiceController@update');
Route::delete('service/{id}', 'ServiceController@destroy');
Route::post('service/', 'ServiceController@store');
Route::get('service/pdf/{id}', 'ServiceController@invoice_pdf');

//route pelanggan
Route::get('pelanggan', 'PelangganController@index');
Route::post('pelanggan/{id}', 'PelangganController@add');
Route::get('pelanggan/{id}', 'PelangganController@edit');
Route::put('pelanggan/{id}', 'PelangganController@update');
Route::delete('pelanggan/{id}', 'PelangganController@destroy');
Route::post('pelanggan/', 'PelangganController@store');

Route::get('laporan', 'LaporanController@index');
Route::get('laporan/pdf', 'LaporanController@show_pdf');

// Route::resource('pelanggan', 'PelangganController');

Route::resource('input', 'tampilan_input');





Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
