<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\ArticleModel;
use App\kkModel;
use App\GalleryModel;
use App\SliderModel;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $article = ArticleModel::count();
        $articleTrash = ArticleModel::onlyTrashed()->count();
        $kk = kkModel::count();
        $galleries = GalleryModel::count();
        $pictures = SliderModel::count();
        return view('adminlte::home',compact("article","articleTrash","kk","galleries","pictures"));
    }
}