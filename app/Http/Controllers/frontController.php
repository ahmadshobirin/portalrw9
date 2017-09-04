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
use App\FooterModel;
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
                ->join('users','users.id','=','article.user_id')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category','users.name')
                ->orderBy('article.id','desc')
                ->where('article.status', 'aktif')
                ->paginate(6);
        $slider = SliderModel::where('status','aktif')->get();

        return view('index', compact("latestArticle","Listarticle","slider"));
        // $countBirthday = 0;
        // $birthdayNow = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();

        // foreach($birthdayNow as $data)
        // {
        //     if($data->tanggal_lahir->month == \Carbon\Carbon::now()->month && $data->tanggal_lahir->day == \Carbon\Carbon::now()->day)
        //     {
        //         $countBirthday++;
        //     }
        // }
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
        return view('detail-index', compact("listArticle","image","latestArticle","gallery"));

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
        return view('category', compact("articleInti","kategori","latestArticle","listArticle"));
     }
    
    public function footer($slug)
    {
        $dataFooter = FooterModel::where('slug','=',$slug)->first();
        return view('footer',compact('dataFooter'));
    }

//     public function birthday()
//     {
//         $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
//                 ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
//                 ->orderBy('article.id','desc')
//                 ->limit(4)
//                 ->get();

//         // $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
//         // dd($birthdayTomorrow, $birthdayNow);
//         return view('ultah', compact("birthday","latestArticle","category"));
//     }

    public function gallery()
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

    public function galleryEvent()
    {
        $category = KategoriArticleModel::get(); 
        $birthday = DetailKkModel::select('nama','tempat_lahir','tanggal_lahir')->get();
        $latestArticle = ArticleModel::join('category', 'category.id', '=', 'article.category')
                ->select('article.id', 'article.title', 'article.images', 'article.description', 'article.content', 'article.slug', 'article.created_at','category.category')
                ->orderBy('article.id','desc')
                ->limit(4)
                ->get();
        $gallery = GalleryModel::orderBy('created_at','desc')->get();
        return view('gallery-detail-event', compact('category','birthday','latestArticle','gallery'));
    }

}