<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\KategoriArticleModel;
use App\DetailKkModel;
use Carbon\Carbon;

class frontController extends Controller
{
    public function index()
    {
        $article = ArticleModel::get();
        $category = KategoriArticleModel::get();
        return view('index', compact("article", "category"));
    }

     public function article_view($slug)
     {    
          $article = ArticleModel::where('slug','=', $slug)->first();
          $category = KategoriArticleModel::get();
      
          return view('articleView', compact("article", "category"));

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
        $article  =  ArticleModel::select('category.category','article.id','article.title',
                     'article.description','article.images','article.created_at')
                     ->join('category','category.id','=','article.id')
                     ->where('article.category','=',$kategori->id)->get();
        $category = KategoriArticleModel::get();
        return view('detail-post', compact("kategori","category","article"));
     }
    
    public function birthday()
    {
        $birthdayNow = DetailKkModel::select('nama')->where('tanggal_lahir','=',Carbon::now())->get();
        $birthdayTomorrow = DetailKkModel::select('nama')->where('tanggal_lahir','=',Carbon::now()->addDays(1))->get();
        dd($birthdayTomorrow);
    }

    public function detail()
    {
        $article = ArticleModel::get();
        $category = KategoriArticleModel::get();
        return view('detail-post',compact('article','category'));
    }

}
