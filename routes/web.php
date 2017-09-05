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
Route::get('/gallery', 'frontController@gallery');
// ini ntar dibuat view gallery detail
Route::get('/gallery/event', 'frontController@galleryEvent');
// baris ini aja ^^^^^^^
Route::get('/article/category/{slug}','frontController@category_article');
Route::get('/article/post/{slug}','frontController@article_view'); 

// Route::get('/birthday','frontController@birthday');
Route::get('footer/{slug}','frontController@footer');

Route::get('/tentang-kami','frontController@tentangkami');
Route::get('/pedoman-media-cyber','frontController@pedoman');
Route::get('/manajemen-redaksi','frontController@manajemen');
Route::get('/ketentuan-layanan','frontController@ketentuan');
Route::get('/kebijakan-privasi','frontController@kebijakan');
Route::get('/panduan-dan-bantuan-menulis','frontController@panduan');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    //user
    Route::get('/admin','HomeController@index');
    Route::get('/pengaturan','UserController@config');
    Route::get('pengaturan/ubahPassword','UserController@password');
    Route::post('/pengaturan/ubahPassword','UserController@updatePassword');
    Route::get('/pengaturan/ubahakun','UserController@akun');
    Route::post('/pengaturan/ubahakun','UserController@updateakun');
    
<<<<<<< HEAD
    // Route::get('/home/artikel','UserArtikelController@index');
    // Route::get('/home/artikel/tambah','UserArtikelController@create');
    // Route::get('/home/artikel/edit/{id}','UserArtikelController@edit');
    Route::resource('/home/artikel','UserArtikelController');
=======
    Route::get('/user/artikel','UserArtikelController@index');
    Route::get('/user/artikel/tambah','UserArtikelController@create');
    Route::post('/user/artikel/tambah','UserArtikelController@store');
    Route::get('/user/artikel/ubah/{id}','UserArtikelController@edit');
    Route::post('/user/artikel/ubah','UserArtikelController@update');
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6

    Route::middleware(['auth', 'admin'])->group(function () {

        //articlecontorller
        Route::resource('/admin/article','ArticleController');
        Route::get('admin/articletrash', 'ArticleController@trash');
        Route::get('admin/article/restore/{id}', 'ArticleController@restore');
        Route::get('admin/article/permanent/delete/{id}', 'ArticleController@permanentDelete');
        Route::get('admin/artikeluser','ArticleController@articleUser');

        //articlereview
        Route::get('admin/view/article','UserArtikelController@viewAdmin');
        Route::get('admin/view/article/{id}','UserArtikelController@detailViewAdmin');
        Route::get('admin/view/setstatus/{id}/{status}','UserArtikelController@setStatus');

        
        //categorycontroller
        Route::resource('/admin/category','categoryController');
        Route::get('admin/categorytrash', 'categoryController@trash');
        Route::get('admin/category/restore/{id}', 'categoryController@restore');
        Route::get('admin/category/permanent/delete/{id}', 'categoryController@permanentDelete');

        //kkcontroller
        Route::resource('/admin/warga','kkController');
        Route::get('/admin/warga/{id}/delete','kkController@destroy');
        Route::post('/admin/warga/create/ajax','kkController@store');
        Route::get('admin/wargatrash', 'kkController@trash');
        Route::get('admin/warga/restore/{id}', 'kkController@restore');
        Route::get('admin/warga/permanent/delete/{id}', 'kkController@permanentDelete');
        Route::get('admin/warga/add/one','kkController@tambahSatu');
        Route::post('admin/warga/add/one','kkController@simpanSatu');
        
        //detailkk
        Route::get('admin/detailkk/','DetailKkController@index');
        Route::get('admin/detailkk/create','DetailKkController@create');
        Route::post('admin/detailkk/create','DetailKkController@store');
        Route::get('admin/detailkk/edit/{id}','DetailKkController@edit');
        Route::post('admin/detailkk/update/{id}','DetailKkController@update');
        Route::get('admin/detailkk/delete/{id}','DetailKkController@destroy');
        Route::get('admin/detailkk/{nokk}','DetailKkController@show');
        Route::get('admin/detailkktrash/{nokk}', 'DetailKkController@trash');
        Route::get('admin/detailkk/restore/{id}', 'DetailKkController@restore');
        Route::get('admin/detailkk/permanent/delete/{id}', 'DetailKkController@permanentDelete');   

        //slidercontroller
        Route::resource('/admin/slider','SliderController');
        Route::get('admin/slidertrash', 'SliderController@trash');
        Route::get('admin/slider/restore/{id}', 'SliderController@restore');
        Route::get('admin/slider/permanent/delete/{id}', 'SliderController@permanentDelete');
        Route::get('/admin/slider/setstatus/{id}/{status}','SliderController@setStatus');


        //gallerycontroller
        Route::resource('/admin/gallery','GalleryController');
        Route::get('admin/gallerytrash', 'GalleryController@trash');
        Route::get('admin/gallery/restore/{id}', 'GalleryController@restore');
        Route::get('admin/gallery/permanent/delete/{id}', 'GalleryController@permanentDelete');  


        //footercontroller
        Route::resource('/admin/footer','FooterController');
        Route::get('admin/footertrash', 'FooterController@trash');
        Route::get('admin/footer/restore/{id}', 'FooterController@restore');
        Route::get('admin/footer/permanent/delete/{id}', 'FooterController@permanentDelete');

    });

});
