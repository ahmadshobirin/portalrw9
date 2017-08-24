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

Route::get('/','frontController@index');
Route::get('/article/category/{slug}','frontController@category_article');
Route::get('/article/post/{slug}','frontController@article_view'); 
Route::get('/birthday','frontController@birthday');
Route::get('/tentang-kami','frontController@tentangkami');
Route::get('/pedoman-media-cyber','frontController@pedoman');
Route::get('/manajemen-redaksi','frontController@manajemen');
Route::get('/ketentuan-layanan','frontController@ketentuan');
Route::get('/kebijakan-privasi','frontController@kebijakan');
Route::get('/panduan-dan-bantuan-menulis','frontController@panduan');

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('/admin/article','ArticleController');
    Route::resource('/admin/category','categoryController');
    Route::resource('/admin/warga','kkController');
    Route::resource('/admin/slider','SliderController');
    Route::resource('/admin/gallery','GalleryController');
    
    Route::get('/admin/pengaturan','UserController@password');
    Route::post('/admin/pengaturan','UserController@updatePassword');
    Route::get('/admin/warga/{id}/delete','kkController@destroy');
    Route::post('/admin/warga/create/ajax','kkController@store');
    Route::get('/admin','HomeController@index');
    Route::get('admin/detailkk/','DetailKkController@index');
    Route::get('admin/detailkk/create','DetailKkController@create');
    Route::post('admin/detailkk/create','DetailKkController@store');
    Route::get('admin/detailkk/edit/{id}','DetailKkController@edit');
    Route::post('admin/detailkk/update/{id}','DetailKkController@update');
    Route::get('admin/detailkk/delete/{id}','DetailKkController@destroy');
    Route::get('admin/detailkk/{nokk}','DetailKkController@show');

    Route::get('admin/articletrash', 'ArticleController@trash');
    Route::get('admin/article/restore/{id}', 'ArticleController@restore');
    Route::get('admin/article/permanent/delete/{id}', 'ArticleController@permanentDelete');

    Route::get('admin/categorytrash', 'categoryController@trash');
    Route::get('admin/category/restore/{id}', 'categoryController@restore');
    Route::get('admin/category/permanent/delete/{id}', 'categoryController@permanentDelete');

    Route::get('admin/wargatrash', 'kkController@trash');
    Route::get('admin/warga/restore/{id}', 'kkController@restore');
    Route::get('admin/warga/permanent/delete/{id}', 'kkController@permanentDelete');

    Route::get('admin/warga/add/one','kkController@tambahSatu');
    Route::post('admin/warga/add/one','kkController@simpanSatu');

    Route::get('admin/detailkktrash/{nokk}', 'DetailKkController@trash');
    Route::get('admin/detailkk/restore/{id}', 'DetailKkController@restore');
    Route::get('admin/detailkk/permanent/delete/{id}', 'DetailKkController@permanentDelete');   

    Route::get('admin/slidertrash', 'SliderController@trash');
    Route::get('admin/slider/restore/{id}', 'SliderController@restore');
    Route::get('admin/slider/permanent/delete/{id}', 'SliderController@permanentDelete');
    Route::get('/admin/slider/setstatus/{id}/{status}','SliderController@setStatus');

    Route::get('admin/gallerytrash', 'GalleryController@trash');
    Route::get('admin/gallery/restore/{id}', 'GalleryController@restore');
    Route::get('admin/gallery/permanent/delete/{id}', 'GalleryController@permanentDelete');   
});
