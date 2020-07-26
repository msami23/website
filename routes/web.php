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
Auth::routes();
Route::get('/','HomeController@index')->name('home_page');

Route::get('contact','HomeController@contact')->name('contact');
Route::get('category','CategoriesController@category')->name('category');

Route::get('checkout','HomeController@checkout')->name('checkout');
Route::get('products_details/{id}','ProductsController@productsDetails')->name('products_details');

Route::post('cart','CartController@store')->name('cart.store');
Route::get('cart','CartController@index')->name('cart');
Route::get('cart/{product_id}','CartController@remove')->name('cart.remove');

Route::get('download/{id}','FillController@download');

Route::get('view-file/{id}','FillController@view');














Auth::routes([
  //'register'=> false,  //توقف صفحة التسجيل

    'verify' => true,  //verification Email routes تاكيد الايميل وارسال رسالة علي الايميل للتاكيد الحساب
]);

Route::get('/home', 'HomeController@index')->name('home')
->middleware('admin');//->middleware('auth')->middleware('verified');

