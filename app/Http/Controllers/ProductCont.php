<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Product;
use App\Brand;
use Session;

class ProductCont extends Controller
{
    public function add_product(Request $req){
      $this->validate($req,[
            'name' => 'required',
            'type' => 'required',
            'category' => 'required',
            'kind' => 'required',
            'price' => 'required',
            'description' => 'required',
            'sizes' => 'required',
            'colors' => 'required',
            'brand' => 'required',
            'product_img' => 'required'
        ]);
        if($req->hasFile('product_img')){

            $file = $req->file('product_img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'product' . '_' . time() .'.'. $ext;
            $file->storeAs('public/img' , $filename);
            
        } else {

            $filename = 'noimage.png';
        }

    	$product = new Product();
    	$product->name = $req->name;
    	$product->type = $req->type;
    	$product->category = $req->category;
      $product->kind = $req->kind;
    	$product->price = $req->price;
    	$product->description = $req->description;
    	$product->brand_id = $req->brand;
    	$product->available_sizes = $req->sizes;
    	$product->colors = $req->colors;
      $product->image = $filename;
    	$product->save();
    	return redirect('/all_products');
    }

    public function get_products(){      
                $products = DB::table('brands')
                  ->join('products' , 'brands.id' , 'products.brand_id')
                  ->leftJoin('product_offer','products.id','=',
                   'product_offer.product_id')
                  ->leftJoin('offers' ,'product_offer.offer_id','=','offers.id')
                  ->select('products.*' , 'offers.discount as discount' , 
                    'brands.name as brand_name')
                  ->get();
        return view('products' , compact('products'));
    }

    public function edit_product($id){
        $comments = DB::table('comments')
                    ->join('customers' , 'comments.customer_id' , 'customers.id')
                    ->where('comments.product_id' , $id)
                    ->select('customers.username' , 'comments.comment' , 
                             'comments.created_at as date')
                    ->get();
        $product = DB::table('brands')
                  ->join('products' , 'brands.id' , 'products.brand_id')
                  ->leftJoin('product_offer','products.id','=',
                   'product_offer.product_id')
                  ->leftJoin('offers' ,'product_offer.offer_id','=','offers.id')
                  ->select('products.*' , 'offers.discount as discount' , 
                    'brands.name as brand_name')
                  ->where('products.id' , $id)
                  ->get()->first();
        return view('product' , compact('product' , 'comments'));
    }

    public function add_product_view(){
      $brands = Brand::get();
      return view('add_product' , compact('brands'));
    }

    public function all_products(){
      $products = Product::join('brands' , 'products.brand_id' , 'brands.id')
                  ->select('products.*' , 'brands.name as brand_name')
                  ->get();
      return view('/product_manager' , compact('products'));
    }

    public function get_sales_products(){
      $products = DB::table('brands')
                  ->join('products' , 'brands.id' , 'products.brand_id')
                  ->join('product_offer','products.id','=',
                   'product_offer.product_id')
                  ->join('offers' ,'product_offer.offer_id','=','offers.id')
                  ->select('products.*' , 'offers.discount as discount' ,
                    'brands.name as brand_name')
                  ->get();
      return view('sales' , compact('products'));
    }
}
