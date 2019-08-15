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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
 * Manager Routers
 */ 
Route::get('/manager', 'Manager\DashboardController@index')->name('manager');

//List product
Route::get('/manager/products', 'Manager\ProductController@index')->name('manager.products');

//Create Product
Route::get('/manager/product/create', 'Manager\ProductController@create')->name('manager.product.create');
Route::post('/manager/product/create', 'Manager\ProductController@create')->name('manager.product.create.commit');

//Edit Product by id
Route::get('/manager/product/edit/{id}', 'Manager\ProductController@edit')->name('manager.product.edit');
Route::put('/manager/product/edit/{id}', 'Manager\ProductController@edit')->name('manager.product.edit.commit');

//Delete Product by id
Route::get('/manager/product/delete/{id}', 'Manager\ProductController@delete')->name('manager.product.delete');
Route::delete('/manager/product/delete/{id}', 'Manager\ProductController@delete')->name('manager.product.delete.commit');