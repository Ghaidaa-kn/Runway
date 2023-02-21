<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\FashionModel;

class ModelCont extends Controller
{
    public function all_models(){
    	$models = FashionModel::get();
    	return view('dash_models' , compact('models'));
    }

    public function add_model(Request $req){
        $this->validate($req,[
            'first_name' => 'required',
            'last_name' => 'required',
            'skin' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
            'photo' => 'required'
        ]);

        if($req->hasFile('photo')){

            $file = $req->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = 'model' . '_' . time() .'.'. $ext;
            $file->storeAs('public/img' , $filename);
            
        }

    	$model = new FashionModel();
    	$model->first_name = $req->first_name;
    	$model->last_name = $req->last_name;
    	$model->photo = $filename;
    	$model->skin = $req->skin;
    	$model->height = $req->height;
    	$model->weight = $req->weight;
    	$model->age = $req->age;
    	$model->email = $req->email;
    	$model->phone = $req->phone;
    	$model->address = $req->address;
    	$model->age = $req->age;
    	$model->save();

    	return redirect('/all_models');
    }

    public function delete_model($id){
    	FashionModel::destroy($id);
    	return redirect('/all_models');
    }
}
