<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Cart;
use Session;

class CartCont extends Controller
{
	public function get_user_carts(){
        $userId = Session::get('user')['id'];
        $all = DB::table('products')
               ->leftJoin('cart' , 'products.id' , 'cart.product_id')
               ->leftJoin('product_offer','cart.product_id','product_offer.product_id')
               ->leftJoin('offers' , 'product_offer.offer_id' , 'offers.id')
               ->where('cart.customer_id' , $userId)
               ->select('products.*', 'products.price as unit_price' , 'cart.*' , 
                 'cart.id as cart_id' ,'offers.discount')
               ->get();
		return view('carts' , compact('all'));
	}

    public function add_to_cart(Request $req){
        $this->validate($req,[
            'size' => 'required',
            'color' => 'required',
            'quantity' => 'required'
        ]);
        $userId = Session::get('user')['id'];
        $is_sale_belongs_to = DB::table('products')
            ->join('product_offer','products.id' ,'product_offer.product_id')
            ->join('offers','offers.id' , 'product_offer.offer_id')
            ->where('products.id' ,$req->product_id)
            ->select('offers.discount')
            ->get()
            ->first();

        if(!$is_sale_belongs_to){
            $total_price = $req->price * $req->quantity;
        }else{
            $total_price = ($req->price * $is_sale_belongs_to->discount / 100) 
                           * $req->quantity;
        }

    	$cart = new Cart();
        $cart->customer_id = $userId;
    	$cart->product_id = $req->product_id;
    	$cart->quantity = $req->quantity;
    	$cart->size = $req->size;
    	$cart->color = $req->color;
    	$cart->total_price = $total_price; 
    	$cart->save();
    	return redirect('/products');
    }

    public function delete_cart($id){
    	Cart::destroy($id);
    	return redirect('carts');
    }
}
 