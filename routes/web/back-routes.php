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

///categories
Route::get('/admin/categorias', 'AdminControllers\CategoryController@index')->name('admin.category_index')->middleware('IsAdmin');

Route::get('/admin/categoria/crear', 'AdminControllers\CategoryController@create')->name('admin.category_create')->middleware('IsAdmin');

Route::post('/admin/categorias/guardar', 'AdminControllers\CategoryController@store')->name('admin.category_store')->middleware('IsAdmin');

Route::delete('/admin/categorias/{id}','AdminControllers\CategoryController@destroy')->name('admin.category_delete')->middleware('IsAdmin');

Route::get('/admin/categorias/{id}/edit', 'AdminControllers\CategoryController@edit')->name('admin.category_edit')->middleware('IsAdmin');

Route::put('/admin/categorias/{id}/update', 'AdminControllers\CategoryController@update')->name('admin.category_update')->middleware('IsAdmin');

//products
Route::get('/admin', 'AdminControllers\ProductController@index')->name('admin.products_index')->middleware('IsAdmin');

Route::get('/admin/products/create', 'AdminControllers\ProductController@create')->name('admin.products_create')->middleware('IsAdmin');;

Route::post('/admin/products/save', 'AdminControllers\ProductController@store')->name('admin.products_store')->middleware('IsAdmin');

Route::delete('/admin/products/{id}','AdminControllers\ProductController@destroy')->name('admin.products_delete')->middleware('IsAdmin');
Route::get('/admin/products/{product}/edit', 'AdminControllers\ProductController@edit')->name('admin.products_edit')->middleware('IsAdmin');
Route::put('/admin/products/{product}/update', 'AdminControllers\ProductController@update')->name('admin.products_update')->middleware('IsAdmin');