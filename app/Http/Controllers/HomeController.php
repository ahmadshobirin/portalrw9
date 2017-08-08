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
        $article = ArticleModel::whereNull('deleted_at')->count();
        $articleTrash = ArticleModel::whereNotNull('deleted_at')->count();
        $kk = kkModel::count();
        return view('adminlte::home',compact("article","articleTrash","kk"));
    }
}