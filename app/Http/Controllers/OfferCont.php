<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Offer;
use App\Product;
use App\Product_offer;
use App\Customer;
use Mail;

class OfferCont extends Controller
{
    public function make_offer(Request $req){
        $this->validate($req,[
            'description' => 'required',
            'discount' => 'required',
            'start_date' => 'required | after:today',
            'end_date' => 'required | after:today',
            'product_offer' => 'required'
        ]);
        $offer = new Offer();
        $offer->description = $req->description;
        $offer->discount = $req->discount;
        $offer->start_date = $req->start_date;
        $offer->end_date = $req->end_date;
        $offer->save();
        foreach ($req->product_offer as $product_id) {
            $product_offer = new Product_offer();
            $product_offer->offer_id = $offer->id;
            $product_offer->product_id = $product_id;
            $product_offer->save();
        }

        $customers = Customer::get();
        foreach($customers as $customer){
            $email = $customer->email;
            $data = array('welcome'=>'Dear '.$customer->username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that there are new sales on some of our products.');
                Mail::send('Email' , $data , function($message) use($email){
                    $message->to($email)->subject('Welcome Email');
                });
        }
        
        return redirect('/all_products');
    }

    public function add_offer(){
        $available_products = \App\Product::whereDoesntHave('offers')->get();
        return view('add_offer' , compact('available_products'));
    }
}
