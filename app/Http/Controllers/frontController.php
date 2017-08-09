<?php
/*
 * Created on Wed Aug 09 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin, Crish Virdy,Ilham Izzul H,Nofita Mahfudiyah,Harun U Fajar
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\KategoriArticleModel;
use App\DetailKkModel;
use Carbon\Carbon;
use DB;
use Image;

class frontController extends Controller
{
    public function index()
    {
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $category = KategoriArticleModel::get();
        $countBirthday = 0;
        $birthdayNow = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        foreach($birthdayNow as $data)
        {
            if($data->tanggal_lahir->month == \Carbon\Carbon::now()->month && $data->tanggal_lahir->day == \Carbon\Carbon::now()->day)
            {
                $countBirthday++;
            }
        }
        return view('index', compact("article", "category","category","countBirthday"));
    }

     public function article_view($slug)
     {    
          $article  = ArticleModel::where('slug','=', $slug)->get();
          $category = KategoriArticleModel::get();
          return view('detail-index', compact("article", "category","image"));

     }
    
     // public function category_article($id)
     // {    
     //      $article = ArticleModel::where("category", "=", $id)->get();
     //      $page_title = KategoriArticleModel::find($id);
     //      $category = KategoriArticleModel::get();
     //      return view('category_article', compact("article", "category", "page_title"));
     // }
  
    public function category_article($slug)
     {  
        $kategori = KategoriArticleModel::where('slug','=',$slug)->first();

        $listArticle  =  ArticleModel::select('category.category','article.slug','article.id','article.title',
                     'article.description','article.images','article.created_at')
                     ->join('category','category.id','=','article.category')
                     ->where('article.category','=',$kategori->id)->get();

        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $category = KategoriArticleModel::get();
        return view('detail-post', compact("kategori","category","article","listArticle"));
     }
    
    public function birthday()
    {
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();
        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get();
        // dd($birthdayTomorrow, $birthdayNow);
        return view('ultah', compact("birthday","article","category"));
    }

    public function detail()
    {
        $article = ArticleModel::get();
        $category = KategoriArticleModel::get();
        return view('detail-post',compact('article','category'));
    }

}