<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_consultation;
use App\Fashion_expert;
use Illuminate\support\facades\DB;
use Session;
use Mail;

class CustomerConsultationCont extends Controller
{
    public function request_consultation(Request $req){
        $this->validate($req,[
            'consultation' => 'required'
        ]);
    	$userId = Session::get('user')['id'];
    	$consultation = new Customer_consultation();
    	$consultation->expert_id = $req->expert_id;
    	$consultation->customer_id = $userId;
    	$consultation->consultation = $req->consultation;
    	$consultation->save();
        $epxert = Fashion_expert::find($req->expert_id);
        $username = $epxert->username;
        $email = $epxert->email;
        $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that you have a new request consultation.');
        Mail::send('Email' , $data , function($message) use($email){
            $message->to($email)->subject('Welcome Email');
        });
    	return redirect('/get_experts');
    }

    public function get_customer_consultations(){
    	$userId = Session::get('user')['id'];
    	$all = Customer_consultation::join('fashion_experts',
               'customer_consultations.expert_id'   , 'fashion_experts.id')
               ->where('customer_id' , $userId)
               ->select('customer_consultations.*' , 'fashion_experts.username as expert_name')
               ->get();
    	return view('customer_consultations' , compact('all'));
    }

    public function get_customer_consultation_requests(){
    	$userId = Session::get('user')['id'];
    	$requests = Customer_consultation::whereNull('expert_advice')
    	            ->where('expert_id' , $userId)->get();
    	return view('consultation_requests' , compact('requests'));
    }

    public function edit($id){
    	$request = Customer_consultation::find($id);
    	return view('edit_customer_consultation_req' , compact('request'));
    }

    public function add_customer_advice(Request $req , $id){
        $this->validate($req,[
            'advice' => 'required'
        ]);
    	DB::update('update customer_consultations set expert_advice = ? where id = ?',[$req->advice ,$id]);
        $consultation = Customer_consultation::join('customers' ,
                        'customer_consultations.customer_id' , 'customers.id')
                        ->where('customer_consultations.id' , $id)
                        ->select('customers.*' , 'customer_consultations.*')
                        ->get()
                        ->first();

        $username = $consultation->username;
        $email = $consultation->email;
        $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that your consultation with number #'.$id." has been replied");
        Mail::send('Email' , $data , function($message) use($email){
            $message->to($email)->subject('Welcome Email');
        });

    	return redirect('/edit_customer_req/'.$id);
    }
}
