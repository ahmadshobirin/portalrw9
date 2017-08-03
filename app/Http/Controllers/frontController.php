<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\KategoriArticleModel;

class frontController extends Controller
{
    public function index()
    {
        $article = ArticleModel::get();
        $category = KategoriArticleModel::get();
        return view('dashboard', compact("article", "category"));
    }

   public function article_view($slug)
   {    
        $article = ArticleModel::where('slug','=', $slug)->first();
        $category = KategoriArticleModel::get();
        return view('articleView', compact("article", "category"));
   }
    
   public function category_article($id)
   {    
        $article = ArticleModel::where("category", "=", $id)->get();
        $page_title = KategoriArticleModel::find($id);
        $category = KategoriArticleModel::get();
        return view('category_article', compact("article", "category", "page_title"));
   }
    
    

}
