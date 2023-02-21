<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Designer;
use App\Design;
use App\FashionModel;
use Session;

class DesignCont extends Controller
{
    public function add_design_view(){
    	$models = FashionModel::get();
    	return view('add_design' , compact('models'));
    }

    public function add_design(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'type' => 'required',
            'category' => 'required',
            'kind' => 'required',
            'model_id' => 'required',
            'image' => 'required'
        ]);
    	if($req->hasFile('image')){

            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'model' . '_' . time() .'.'. $ext;
            $file->storeAs('public/img' , $filename);
            
        } else {

            $filename = 'noimage.png';
        }

    	$userId = Session::get('user')['id'];
    	$design = new Design();
    	$design->designer_id = $userId;
    	$design->name = $req->name;
    	$design->type = $req->type;
    	$design->category = $req->category;
    	$design->kind = $req->kind;
    	$design->model_id = $req->model_id;
    	$design->image = $filename;
    	$design->save();
    	return redirect('/designes');
    }

    public function get_designer_designes(){
        $userId = Session::get('user')['id'];
        $designs = DB::table('designs')
                   ->join('models' , 'designs.model_id' , 'models.id')
                   ->where('designer_id' , $userId)
                   ->select('designs.*' , 'models.first_name as first_name' , 
                    'models.last_name as last_name')
                   ->get();
        return view('designes' , compact('designs'));
    }
}
