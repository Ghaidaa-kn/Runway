<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Request_design;
use App\Request_material;
use App\Designer;
use Session;
use Mail;

class RequestDesignCont extends Controller
{
    public function add_design_request(Request $req){
        
        $this->validate($req,[
            'kind' => 'required',
            'category' => 'required',
            'size' => 'required',
            'color' => 'required',
            'other_features' => 'required',
            'payment_way' => 'required',
            'materials' => 'required',
            'date' => 'required | after:today'
        ]);
    	$userId = Session::get('user')['id'];
    	$req_design = new Request_design();
    	$req_design->customer_id = $userId;
    	$req_design->designer_id = $req->designer_id;
    	$req_design->kind = $req->kind;
    	$req_design->category = $req->category;
    	$req_design->date = $req->date;
    	$req_design->status = null;
    	$req_design->price = null;
    	$req_design->payment_way = $req->payment_way;
    	$req_design->payment_status = null;
    	$req_design->image = null;
    	$req_design->size = $req->size;
    	$req_design->color = $req->color;
    	$req_design->other_features = $req->other_features;
    	$req_design->save();
    	
    	$material_ids = $req->materials;
		foreach($material_ids as $material_id){
			$req_material = new Request_material();
			$req_material->material_id = $material_id;
			$req_material->request_id = $req_design->id;
    		$req_material->save();
		}

        $designer = Designer::find($req->designer_id);
        $username = $designer->username;
        $email = $designer->email;
        $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that you have a new request design.');
        Mail::send('Email' , $data , function($message) use($email){
            $message->to($email)->subject('Welcome Email');
        });
    	
    	return redirect('/edit_designer/'.$req->designer_id);
    }

    public function all_requests(){
    	$userId = Session::get('user')['id'];
    	$all = DB::table('request_design')
    	       ->join('customers' , 'request_design.customer_id' , 'customers.id')
    	       ->select('customers.first_name', 'customers.last_name',
    	       	'request_design.id')
    	       ->orderBy('request_design.id' ,'asc')
    	       ->where('request_design.designer_id' , $userId)
    	       ->whereNull('request_design.status')
    	       ->get();
    	return view('all_design_requests' , compact('all'));
    }

    public function edit($id){
    	$request = Request_design::find($id);
    	$materials = Request_material::join('materials' ,'request_material.material_id'          ,'materials.id')
    	             ->where('request_id' , $request->id)
    	             ->get();
    	$role = Session::get('role');
    	return view('edit_request_design' , compact('request' , 'materials' , 'role'));
    }

    public function request_response(Request $req , $id){
        $this->validate($req,[
            'status' => 'required'
        ]);
        $customer = Request_design::join('customers' , 'request_design.customer_id' ,        'customers.id')
                        ->where('request_design.id' , $id)
                        ->select('customers.username' , 'customers.email')
                        ->get()
                        ->first();
            $username = $customer->username;
            $email = $customer->email;

    	if($req->status == 1){
    		DB::update('update request_design set status=? , price=? , payment_status=? , stage=?  where id = ?',
    			[$req->status, $req->price, $req->payment_status, $req->stage, $id]);

            $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that your request design #'.$id.'  has been accepted.ou You can see the request details by your account.');
            Mail::send('Email' , $data , function($message) use($email){
                $message->to($email)->subject('Welcome Email');
            });

    	}else if($req->status == 2){
    		DB::update('update request_design set status=? where id = ?',
    			[$req->status, $id]);

            $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that your request design #'.$id.'  has been rejected.');
            Mail::send('Email' , $data , function($message) use($email){
                $message->to($email)->subject('Welcome Email');
            });
    	}
    	return redirect('/all_requests');
    }

    public function upload_design_photo(Request $req ,$id){
        $this->validate($req,[
            'image' => 'image | required'
        ]);
    	if($req->hasFile('image')){
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'design' . '_' . time() .'.'. $ext;
            $file->storeAs('public/img' , $filename);
        } else {
            $filename = null;
        }

    	DB::update('update request_design set image=? where id = ?',
    			[$filename, $id]);
    	return redirect('/edit_accepted_design/'.$id);
    }

    public function get_accepted_designs(){
    	$userId = Session::get('user')['id'];
    	$designs = DB::table('request_design')
    	       ->join('customers' , 'request_design.customer_id' , 'customers.id')
    	       ->select('customers.first_name', 'customers.last_name',
    	       	'request_design.id')
    	       ->orderBy('request_design.id' ,'asc')
    	       ->where('request_design.designer_id' , 1)
    	       ->where('request_design.status' , 1)
    	       ->get();
    	return view('accepted_designs' , compact('designs'));
    }

    public function edit_accepted_design($id){
    	$design = DB::table('request_design')
    	          ->join('customers' , 'customers.id' , 'request_design.customer_id')
    	          ->select('request_design.*','customers.first_name',
    	          	'customers.last_name','customers.phone','customers.email')
    	          ->where('request_design.id' , $id)
    	          ->get()
    	          ->first();
    	$materials = Request_material::join('materials' ,'request_material.material_id'          ,'materials.id')
    	             ->where('request_id' ,$id)
    	             ->get();
    	return view('accepted_design' , compact('design' , 'materials'));
    }

    public function get_customer_design_requests(){
        $userId = Session::get('user')['id'];
        $requests = DB::table('request_design')
                    ->join('designers' ,'request_design.designer_id' ,'designers.id')
                    ->select('request_design.*' ,'designers.first_name' , 
                        'designers.last_name')
                    ->where('request_design.customer_id' , $userId)
                    ->orderBy('request_design.id' , 'desc')
                    ->get();
        return view('customer_design_requests' , compact('requests'));
    }

    public function edit_customer_design_request($id){
        $design = DB::table('request_design')
                  ->join('designers' ,'request_design.designer_id' ,'designers.id')
                  ->select('request_design.*','designers.first_name',
                    'designers.last_name','designers.phone','designers.email')
                  ->where('request_design.id' , $id)
                  ->get()
                  ->first();
        $materials = Request_material::join('materials' ,'request_material.material_id'          ,'materials.id')
                     ->where('request_id' ,$id)
                     ->get();
        return view('edit_customer_design_request' , compact('design' , 'materials'));
    }
}
