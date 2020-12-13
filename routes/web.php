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

Route::get('danhsachloai', 'App\Http\Controllers\LoaiController@getLoai') -> name('loai.index');
Route::get('danhsachsanpham', 'App\Http\Controllers\SanphamController@getSanpham') -> name('sanpham.index');
*/
Route::get('admin', 'App\Http\Controllers\Backend\DashboardController@index') -> name('dashboard.index');
Route::resource('/admin/products', 'App\Http\Controllers\Backend\ProductController');
Route::resource('/admin/categorys', 'App\Http\Controllers\Backend\CategoryController');

