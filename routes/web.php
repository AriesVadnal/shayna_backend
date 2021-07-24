<?php

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

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::resource('products','ProductController');
Route::get('/gallery/{id}','ProductController@gallery')->name('gallery');
Route::resource('product-galleries','ProductGalleryController');
Route::resource('transactions','TransactionController');
Route::get('/transaction/{id}','TransactionController@setStatus')->name('transactions.status');