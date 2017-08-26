<?php
/*
 * Created on Wed Aug 09 2017
 *
 * Copyright (c) 2017 Ahmad Shobirin, Crish Virdy,Ilham Izzul H,Nofita Mahfudiyah,Harun U Fajar
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use App\SliderModel;
use App\KategoriArticleModel;
use App\DetailKkModel;
use App\GalleryModel;
use Carbon\Carbon;
use DB;
use Image;


class frontController extends Controller
{
    public function index()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $Listarticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->paginate(6);

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

        $gallery = GalleryModel::orderBy('id','desc')->get();
        $slider = SliderModel::where('status','aktif')->get();
        return view('index', compact("latestArticle", "category","category","countBirthday","Listarticle","slider","gallery"));
    }

     public function article_view($slug)
     {    
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $listArticle    = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->where('article.slug' ,'=',$slug)
                ->get();

        $gallery = GalleryModel::orderBy('id','desc')->get();
        $category   = KategoriArticleModel::get();
        return view('detail-index', compact("listArticle", "category","image","latestArticle","gallery"));

     }
  
    public function category_article($slug)
     {  
        $kategori     = KategoriArticleModel::where('slug','=',$slug)->first();
        $listArticle  = ArticleModel::select('category.category','article.slug','article.id','article.title',
                     'article.description','article.images','article.created_at')
                     ->join('category','category.id','=','article.category')
                     ->where('article.category','=',$kategori->id)
                     ->paginate(6);

        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title' , 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category','article.slug')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();
        $category = KategoriArticleModel::get();
        return view('category', compact("articleInti","kategori","category","latestArticle","listArticle"));
     }
    
    public function birthday()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get();
        // dd($birthdayTomorrow, $birthdayNow);
        return view('ultah', compact("birthday","latestArticle","category"));
    }

    public function tentangkami()
    {
        $article = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get();
        return view('tentang-kami',compact("birthday","article","category"));
    }

    public function manajemen()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get();
        return view('manajemen-redaksi',compact("birthday","latestArticle","category"));
    }

    public function pedoman()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get();   
        return view('pedoman-cyber',compact("birthday","latestArticle","category"));
    }

    public function ketentuan()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get(); 
        return view('ketentuan-layanan', compact("birthday","latestArticle","category"));
    }

    public function kebijakan()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();

        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get(); 
        return view('kebijakan-privasi', compact("birthday","latestArticle","category"));
    }

    public function panduan()
    {
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();
                
        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $category = KategoriArticleModel::get(); 
        return view('panduan-menulis', compact("birthday","latestArticle","category"));
    }

    public function galleryDetail()
    {
        $category = KategoriArticleModel::get(); 
        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();
        $gallery = GalleryModel::orderBy('created_at','desc')->get();
        return view('gallery-detail', compact('category','birthday','latestArticle','gallery'));
    }

}