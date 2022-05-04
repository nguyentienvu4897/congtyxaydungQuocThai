<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\website\Video;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use  App\models\ReviewCus;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerqc'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['hotnews'] = Blog::where([
            'status'=>1
        ])->orderBy('id','DESC')->limit(4)->get(['id','title','slug','created_at','image','description']);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['video'] = Video::where(['status'=>1])->get();
        $data['reviewCus'] = ReviewCus::where(['status'=>1])->get();
        $data['designBest'] = Product::where(['cate_slug'=>'mau-thiet-ke','status'=>1])->orderBy('id','DESC')->select('id','category','name','images','slug','cate_slug','type_slug','description', 'content', 'price')
            ->paginate(12); 
        return view('home',$data);
    }
}
