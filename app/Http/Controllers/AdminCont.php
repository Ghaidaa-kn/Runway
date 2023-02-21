<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\support\facades\DB;
use App\Admin;
use App\Designer;
use App\Fashion_expert;
use App\Customer;
use App\Message;

class AdminCont extends Controller
{
    //
    public function register(Request $req){
    	$admin = new Admin();
    	$admin->email = $req->email;
    	$admin->password = Hash::make($req->password);
    	$admin->is_super_admin = $req->is_super_admin;
    	$admin->save();
    	return redirect('/admin_login');
    }

    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required' ,
            'password' => 'required'
        ]);
        
        $user = Admin::where('email' , $req->email)->first();
        if( !$user || !Hash::check($req->password , $user->password)){
            return "username or password is not matched ...";
            // return view('');
        }else{
            $req->session()->put('user' , $user);
            $req->session()->put('role' , 'admin');
            return redirect('/dashboard');
        }
    }

    public function dashboard(){
        $messages = Message::get();
        return view('dashboard' , compact('messages'));
    }

    public function block_unblock($id , $value ,$type){
        if($type == 'card'){
            if($value == 1){
                DB::update('update bank_cards set is_valid = ? where id = ?',[0 ,$id]);
            }elseif($value == 0){
                DB::update('update bank_cards set is_valid = ? where id = ?',[1 ,$id]);
            }
            return redirect('/all_bank_cards'); 

        }else if($type == 'customer'){
            if($value == 1){
                DB::update('update customers set is_blocked = ? where id = ?',
                    [0 ,$id]);
            }elseif($value == 0){
                DB::update('update customers set is_blocked = ? where id = ?',
                    [1 ,$id]);
            }
            return redirect('/all_customers');

        }else if($type == 'expert'){
            if($value == 1){
                DB::update('update fashion_experts set is_blocked = ? where id = ?',
                    [0 ,$id]);
            }elseif($value == 0){
                DB::update('update fashion_experts set is_blocked = ? where id = ?',
                    [1 ,$id]);
            }
            return redirect('/all_experts');

        }else if($type == 'designer'){
            if($value == 1){
                DB::update('update designers set is_blocked = ? where id = ?',
                    [0 ,$id]);
            }elseif($value == 0){
                DB::update('update designers set is_blocked = ? where id = ?',
                    [1 ,$id]);
            }
            return redirect('/all_designers');

        }else if($type == 'manager'){
            if($value == 1){
                DB::update('update product_managers set is_blocked = ? where id = ?',
                    [0 ,$id]);
            }elseif($value == 0){
                DB::update('update product_managers set is_blocked = ? where id = ?',
                    [1 ,$id]);
            }
            return redirect('/all_product_managers');

        }
        
         
    }
}
