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
 Route::get('/detail','frontController@detail');

Route::get('/welcome','frontController@index');

Route::get('/','frontController@index');
Route::get('/article/post/{slug}','frontController@article_view');
// Route::get('/article/{id}','frontController@category_article');
Route::get('/article/category/{slug}','frontController@category_article');

Route::get('/admin','HomeController@index');
Route::get('admin/detailkk','DetailKkController@index');
Route::get('admin/detailkk/create','DetailKkController@create');
Route::post('admin/detailkk/create','DetailKkController@store');
Route::get('admin/detailkk/edit/{id}','DetailKkController@edit');
Route::post('admin/detailkk/update/{id}','DetailKkController@update');
Route::get('admin/detailkk/delete/{id}','DetailKkController@detroy');
Route::get('admin/detailkk/{nokk}','DetailKkController@show');


Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('/admin/article','articleController');
    Route::resource('/admin/category','categoryController');
    Route::resource('/admin/warga','kkController');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
