<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Product_manager;
use Mail;

class ProductManagerCont extends Controller
{
    public function register(Request $req){
        $this->validate($req,[
            'username' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
    	$manager = new Product_manager();
        $manager->first_name = $req->first_name;
        $manager->last_name = $req->last_name;
        $manager->username = $req->username;
        $manager->email = $req->email;
        $manager->phone = $req->phone;
    	$manager->address = $req->address;
    	$manager->password = Hash::make($req->password);
    	$manager->is_blocked = 0;
    	$manager->save();

        $username = $req->username;
        $email = $req->email;
        $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that you have become one of our product managers with this details ( Full Name : '.$req->first_name.' '. $req->last_name.' , Email : '.$req->email.' , Password : '.$req->password.' , UserName : '.$req->username.' )');
        Mail::send('Email' , $data , function($message) use($email){
            $message->to($email)->subject('Welcome Email');
        });

    	return redirect('/dashboard');
    }

    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Product_manager::where('email' , $req->email)->first();
        if( !$user || !Hash::check($req->password , $user->password) || $user->is_blocked == 1){
            return "username or password is not matched ...";
        }else{
            $req->session()->put('user' , $user);
            $req->session()->put('role' , 'manager');
            return redirect('/all_products');
        }
    }

    public function all_managers(){
        $managers = Product_manager::get();
        return view('dash_managers' , compact('managers'));
    }
}
