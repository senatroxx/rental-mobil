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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::get('getHarga', 'AjaxController@getHarga');

// Admin
Route::get('admin/', 'AdminController@index')->name('admin.home');
Route::get('admin/sewa/acc/{id}', 'SewaController@acc')->name('sewa.acc');
Route::get('admin/sewa/done/{id}', 'SewaController@done')->name('sewa.done');
Route::get('admin/sewa/pending', 'SewaController@pending')->name('sewa.pending');
Route::get('admin/sewa/berjalan', 'SewaController@berjalan')->name('sewa.berjalan');
Route::get('admin/sewa/selesai', 'SewaController@selesai')->name('sewa.selesai');

Route::get('admin/booking/pending', 'UserSewaController@pending')->name('booking.pending');
Route::get('admin/booking/berjalan', 'UserSewaController@berjalan')->name('booking.berjalan');
Route::get('admin/booking/selesai', 'UserSewaController@selesai')->name('booking.selesai');

Route::resources([
    'admin/mobil' => 'MobilController',
    'admin/jenismobil' => 'JenisMobilController',
    'admin/sewa' => 'SewaController',
    'admin/list' => 'AdminCrudController',
    'booking' => 'UserSewaController'
]);

// Sharing is caring
View::composer(['*'], function($view){
    $jenisMobil = DB::table('jenis_mobil')->get();

    $view->with('jenisMobil', $jenisMobil);
});