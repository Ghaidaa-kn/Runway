<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Customer;
use App\bank_card;
use Session;

class CustomerCont extends Controller
{
    public function register(Request $req){
        $this->validate($req,[
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
            'bank_card_code' => 'required',
            'gender' => 'required'
        ]);
    	$customer = new Customer();
    	$customer->username = $req->username;
    	$customer->first_name = $req->first_name;
    	$customer->last_name = $req->last_name;
    	$customer->email = $req->email;
    	$customer->password = Hash::make($req->password);
    	$customer->phone = $req->phone;
    	$customer->address = $req->address;
    	$customer->age = $req->age;
    	$customer->gender = $req->gender;
    	$customer->is_blocked = 0;
    	$customer->save();
        $card = new bank_card();
        $card->customer_id = $customer->id;
        $card->code = $req->bank_card_code;
        $card->is_valid = 1;
        $card->save();
    	return redirect('/customer_login');
    }

    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Customer::where('email' , $req->email)->first();
        if( !$user || !Hash::check($req->password , $user->password) || $user->is_blocked == 1){
            return "username or password is not matched ...";
        }else{
            $req->session()->put('user' , $user);
            $req->session()->put('role' , 'customer');
            return redirect('/products');
        }
    }

    public function all_customers(){
        $customers = Customer::get();
        return view('dash_customers' , compact('customers'));
    }

    public function all_bank_cards(){
        $cards = bank_card::join('customers','bank_cards.customer_id','customers.id')
                            ->select('bank_cards.*' ,'customers.first_name' ,
                                     'customers.last_name' ,'customers.email')
                            ->orderBy('id','asc')
                            ->get();
        return view('bank_cards' , compact('cards'));
    }
}
