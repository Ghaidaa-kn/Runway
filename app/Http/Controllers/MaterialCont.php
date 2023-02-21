<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Material;

class MaterialCont extends Controller
{
    public function add_material(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
    	$material = new Material();
    	$material->name = $req->name;
    	$material->price = $req->price;
    	$material->description = $req->description;
    	$material->save();
    	return redirect('/all_products');
    }

    public function all_materials(){
    	$materials = Material::get();
    	return view('all_materials' , compact('materials'));
    }
}
