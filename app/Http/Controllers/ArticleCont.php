<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Article;
use App\Product;
use App\Brand;
use Session;

class ArticleCont extends Controller
{

    public function get_articles(){
        $p_articles = DB::table('products')
                    ->join('articles' , 'products.id' , 'articles.product_id') 
                    ->join('fashion_experts' , 'articles.expert_id' ,
                    'fashion_experts.id')
                    ->select('articles.*' , 'fashion_experts.username' , 
                             'products.name as product_name')
                    ->get();
        $b_articles = DB::table('brands')
                    ->join('articles' , 'brands.id' , 'articles.brand_id') 
                    ->join('fashion_experts' , 'articles.expert_id' ,
                    'fashion_experts.id')
                    ->select('articles.*' , 'fashion_experts.username' , 
                             'brands.name as brand_name')
                    ->get();
        $pb_articles = Article::join('fashion_experts' , 'articles.expert_id' ,
                      'fashion_experts.id')
                      ->whereNull('product_id')
                      ->whereNull('brand_id')
                      ->get();
        return view('article' , compact('p_articles' , 'b_articles' , 'pb_articles'));
    }

    public function add_article_view(){
        $products = Product::get();
        $brands = Brand::get();
        return view('add_article' , compact('products' , 'brands'));
    }

    public function add_article(Request $req){
    	$this->validate($req,[
            'article_img' => 'required',
            'type' => 'required',
            'title' => 'required',
            'content' => 'required',
            'product' => 'required',
            'brand' => 'required'
        ]);

        if($req->hasFile('article_img')){
        	
            $file = $req->file('article_img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'article' . '_' . time() .'.'. $ext;
            $file->storeAs('public/img' , $filename);
            
        } else {

            $filename = 'noimage.png';
        }

        $userId = Session::get('user')['id'];
    	$article = new Article();
    	$article->expert_id = $userId;
    	$article->type = $req->type;
        $article->title = $req->title;
    	$article->image = $filename;
    	$article->content = $req->content;
    	$article->product_id = $req->type == 'product'? $req->product : null;
    	$article->brand_id = $req->type == 'brand'? $req->brand : null;
    	$article->save();
    	return redirect('/articles');
    }
}
