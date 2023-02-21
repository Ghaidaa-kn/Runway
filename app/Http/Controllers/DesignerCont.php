<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Designer;
use App\Design;
use App\Material;
use Session;

class DesignerCont extends Controller
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
    	$designer = new Designer();
    	$designer->username = $req->username;
    	$designer->first_name = $req->first_name;
    	$designer->last_name = $req->last_name;
    	$designer->email = $req->email;
    	$designer->password = Hash::make($req->password);
    	$designer->phone = $req->phone;
    	$designer->address = $req->address;
    	$designer->age = $req->age;
    	$designer->experience_years = $req->experience;
    	$designer->gender = $req->gender;
    	$designer->is_blocked = 0;
    	$designer->save();
    	return redirect('/designer_login');
    }

    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Designer::where('email' , $req->email)->first();
        if( !$user || !Hash::check($req->password , $user->password) || 
            $user->is_blocked == 1){
            return "username or password is not matched ...";
        }else{
            $req->session()->put('user' , $user);
            $req->session()->put('role' , 'designer');
            return redirect('/designes');
        }
    }

    public function get_all(){
        $designers = Designer::orderBy('id','asc')->get();
        return view('designers' , compact('designers'));
    }

    public function edit($id){
        $designer = Designer::find($id);
        $designs = DB::table('designs')
                   ->join('models' , 'designs.model_id' , 'models.id')
                   ->where('designer_id' , $id)
                   ->select('designs.*' , 'models.first_name as first_name' , 
                    'models.last_name as last_name')
                   ->get();
        $materials = Material::get();// for form
        return view('designer_page' , compact('designer' , 'designs' , 'materials'));
    }

    public function all_designers(){// for admin view
        $designers = Designer::get();
        return view('dash_designers' , compact('designers'));
    }

}
