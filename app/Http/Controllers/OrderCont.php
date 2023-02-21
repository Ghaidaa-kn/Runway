<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Order;
use App\Cart;
use App\Product;
use App\Customer;
use App\bank_card;
use Session;
use Mail;

class OrderCont extends Controller
{
	
	public function order_now(){
		$userId = Session::get('user')['id'];
        $bank_card = bank_card::where('customer_id' , $userId)
                     ->select('bank_cards.code')->first();
        $total_price = Cart::where('customer_id' , $userId)->sum('total_price');
        return view('payment' , compact('total_price' , 'bank_card'));
		
	}


    public function make_order(Request $req){
        $this->validate($req,[
            'address' => 'required',
            'payment_way' => 'required'
        ]);
    	$userId = Session::get('user')['id'];
        $card_validity = DB::table('customers')
                       ->join('bank_cards','customers.id' ,'bank_cards.customer_id')
                       ->where('customers.id' , $userId)
                       ->select('bank_cards.is_valid')
                       ->get()
                       ->first();

        if($card_validity->is_valid == 1){
            $carts = DB::table('cart')->join('products' , 'products.id' , 
                    'cart.product_id')
                    ->select('products.*' , 'cart.*' ,'cart.id as cart_id')
                    ->where('customer_id' , $userId)
                    ->get();
            $customer = Customer::find($userId);

            foreach($carts as $cart){
                $order = new Order();
                $order->customer_id = $userId;
                $order->product_id = $cart->product_id;
                $order->size = $cart->size;
                $order->color = $cart->color;
                $order->price = $cart->total_price;
                $order->address = $req->address;
                $order->payment_way = $req->payment_way;
                $order->payment_status = 'pending';
                $order->save();
                Cart::destroy($cart->cart_id);
            }

            $username = $customer->username;
            $email = $customer->email;
            $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that your purchase process  completed successfully.');
            Mail::send('Email' , $data , function($message) use($email){
                $message->to($email)->subject('Welcome Email');
            });

            return redirect('/products');
        }else{
            return "Your card is not valid";
        }       
    	
    }

    public function get_customer_orders(){
        $userId = Session::get('user')['id'];
        $orders = Order::join('products' , 'orders.product_id' , 'products.id')
                  ->join('brands' , 'products.brand_id' , 'brands.id')
                  ->select('orders.*','orders.id as orderNumber', 'orders.created_at as date','products.*' ,
                    'brands.name as brand_name')
                  ->where('customer_id' , $userId)
                  ->get();
        return view('orders' , compact('orders'));
    }
}
