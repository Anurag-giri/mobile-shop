<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// E-commerce site

Route::get('index','product\CategoryController@index');

Route::get('category', 'product\CategoryController@category');
Route::get('addproduct', function() {
	return view('addproduct');
});
Route::post('saveProductDetails','product\AddProductController@saveProductDetails');


// product details 
Route::get('productDetails','product\CategoryController@getProductDetails');