<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Fashion_expert;
use App\Article;

class ExpertCont extends Controller
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
            'experience' => 'required',
            'gender' => 'required'
        ]);
    	$expert = new Fashion_expert();
    	$expert->username = $req->username;
    	$expert->first_name = $req->first_name;
    	$expert->last_name = $req->last_name;
    	$expert->email = $req->email;
    	$expert->password = Hash::make($req->password);
    	$expert->phone = $req->phone;
    	$expert->address = $req->address;
    	$expert->age = $req->age;
    	$expert->experience_years = $req->experience;
    	$expert->gender = $req->gender;
    	$expert->is_blocked = 0;
    	$expert->save();
    	return redirect('/expert_login');
    }

    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Fashion_expert::where('email' , $req->email)->first();
        if( !$user || !Hash::check($req->password , $user->password) || $user->is_blocked == 1){
            return "username or password is not matched ...";
        }else{
            $req->session()->put('user' , $user);
            $req->session()->put('role' , 'expert');
            return redirect('/articles');
        }
    }

    public function get_experts(){
        $experts = Fashion_expert::get();
        return view('experts' , compact('experts'));
    }

    public function edit($id){
        $expert = Fashion_expert::find($id);
        $articles = Article::where('expert_id' , $id)->get();
        return view('expert_page' , compact('expert' , 'articles'));
    }

    public function all_experts(){
        $experts = Fashion_expert::get();
        return view('dash_experts' , compact('experts'));
    }

}
