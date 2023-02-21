<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Brand;

class BrandCont extends Controller
{
    public function add_brand(Request $req){
         $this->validate($req,[
            'name' => 'required' ,
            'description' => 'required'
         ]);

    	$brand = new Brand();
    	$brand->name = $req->name;
    	$brand->description = $req->description;
    	$brand->save();
    	return redirect('/all_products');
    }

    public function get_brands(){
    	$brands = Brand::get();
    	return view('all_brands' , compact('brands'));
    }
}
