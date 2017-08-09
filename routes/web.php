<?php
/*
 * Created on Wed Aug 09 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin Crish Virdy,Ilham Izzul H,Nofita Mahfudiyah,Harun U Fajar
 */
 
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
Route::get('/birthday','frontController@birthday');
Route::get('/article/category/{slug}','frontController@category_article');

Route::get('/admin','HomeController@index');
Route::get('admin/detailkk/','DetailKkController@index');
Route::get('admin/detailkk/create','DetailKkController@create');
Route::post('admin/detailkk/create','DetailKkController@store');
Route::get('admin/detailkk/edit/{id}','DetailKkController@edit');
Route::post('admin/detailkk/update/{id}','DetailKkController@update');
Route::get('admin/detailkk/delete/{id}','DetailKkController@destroy');
Route::get('admin/detailkk/{nokk}','DetailKkController@show');

Route::get('admin/articletrash', 'articleController@trash');
Route::get('admin/article/restore/{id}', 'articleController@restore');
Route::get('admin/article/permanent/delete/{id}', 'articleController@permanentDelete');

Route::get('admin/categorytrash', 'categoryController@trash');
Route::get('admin/category/restore/{id}', 'categoryController@restore');
Route::get('admin/category/permanent/delete/{id}', 'categoryController@permanentDelete');

Route::get('admin/wargatrash', 'kkController@trash');
Route::get('admin/warga/restore/{id}', 'kkController@restore');
Route::get('admin/warga/permanent/delete/{id}', 'kkController@permanentDelete');

Route::get('admin/detailkktrash/{nokk}', 'DetailKkController@trash');
Route::get('admin/detailkk/restore/{id}', 'DetailKkController@restore');
Route::get('admin/detailkk/permanent/delete/{id}', 'DetailKkController@permanentDelete');

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('/admin/article','articleController');
    Route::resource('/admin/category','categoryController');
    Route::resource('/admin/warga','kkController');
    Route::get('/admin/warga/{id}/delete','kkController@destroy');
    Route::post('/admin/warga/create/ajax','kkController@store');
    
});
