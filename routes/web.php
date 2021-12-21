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

route::get('/','welcome@showproduct')->name('welcome');

Route::get('/index','Admin\AdminController@index')->name('index');

//route user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');
Route::get('admin/user/edit/{id}','Admin\UserController@edit');
Route::post('admin/user/update/{id}','Admin\UserController@update');
Route::get('admin/user/delete/{id}','Admin\UserController@delete');
//-------------------------------------------------------------------------------------------------------





//route category
Route::get('admin/category/index','Admin\CategoryController@index')->name('category');
Route::get('admin/category/addcatrgory','Admin\CategoryController@addcatrgory')->name('addcatrgory');
Route::post('admin/category/create','Admin\CategoryController@create')->name('create');
Route::get('admin/category/edit/{id}','Admin\CategoryController@edit');
Route::post('admin/category/update/{id}','Admin\CategoryController@update');
Route::get('admin/category/delete/{id}','Admin\CategoryController@delete');
//-------------------------------------------------------------------------------------------------------




//route price
Route::get('admin/price/index','Admin\PriceController@index')->name('price.index');
Route::get('admin/price/addprice','Admin\PriceController@addprice')->name('price.add');
Route::get('admin/price/editprice','Admin\PriceController@editprice')->name('price.edit');
//-------------------------------------------------------------------------------------------------------





//route product
Route::get('admin/product/productform','Admin\ProductController@showproduct')->name('productform');
Route::get('admin/product/addproduct','Admin\ProductController@addproduct')->name('addproduct');
Route::post('admin/product/create','Admin\ProductController@create')->name('product.c');
Route::get('admin/product/edit/{id}','Admin\ProductController@edit');
Route::post('admin/product/update/{id}','Admin\ProductController@update');
Route::get('admin/product/delete/{id}','Admin\ProductController@delete');
//-------------------------------------------------------------------------------------------------------




//route Contents
Route::get('admin/contents/index','Admin\ContentsController@index')->name('contents.index');
Route::get('admin/contents/addcontents','Admin\ContentsController@addcontents')->name('contents.add');
Route::get('admin/contents/editcontents','Admin\ContentsController@editcontents')->name('contents.edit');
//-------------------------------------------------------------------------------------------------------





//route Promotion
Route::get('admin/promotion/index','Admin\PromotionController@index')->name('promotion.index');
Route::get('admin/promotion/addpromotion','Admin\PromotionController@addpromotion')->name('promotion.add');
Route::get('admin/promotion/editpromotion','Admin\PromotionController@editpromotion')->name('promotion.edit');
//-------------------------------------------------------------------------------------------------------







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
