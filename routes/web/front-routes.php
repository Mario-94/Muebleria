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
Route::get('/', 'StoreControllers\StoreController@index')->name('tienda.index');
Route::get('tienda/{texto}', 'StoreControllers\StoreController@showProducts')->name('tienda.show_products');
Route::get('tienda/detalle/{id}', 'StoreControllers\StoreController@productDetail')->name('tienda.show_product_detail');


Route::prefix('destacados')->group(function () {    
Route::get('novedades','StoreControllers\StoreController@newsProduct');
Route::get('lo_mas_visto','StoreControllers\StoreController@mostView');
});