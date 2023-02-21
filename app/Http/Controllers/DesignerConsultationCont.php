<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design_consultation;
use App\Fashion_expert;
use Illuminate\support\facades\DB;
use Session;
use Mail;

class DesignerConsultationCont extends Controller
{
    public function request_consultation(Request $req){
        $this->validate($req,[
            'consultation' => 'required'
        ]);
    	$userId = Session::get('user')['id'];
    	$consultation = new Design_consultation();
    	$consultation->expert_id = $req->expert_id;
    	$consultation->designer_id = $userId;
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

    public function get_designer_consultations(){
    	$userId = Session::get('user')['id'];
    	$all = Design_consultation::join('fashion_experts','design_consultations.expert_id'   , 'fashion_experts.id')
               ->where('designer_id' , $userId)
               ->select('design_consultations.*','fashion_experts.username as expert_name')
               ->orderBy('id' , 'desc')
               ->get();
    	return view('designser_consultations' , compact('all'));
    }

    public function get_design_consultation_requests(){
    	$userId = Session::get('user')['id'];
    	$requests = Design_consultation::whereNull('expert_advice')
    	            ->where('expert_id' , $userId)->get();
    	return view('design_consultation_requests' , compact('requests'));
    }

    public function edit($id){
    	$request = Design_consultation::find($id);
    	return view('edit_design_consultation_req' , compact('request'));
    }

    public function add_designer_advice(Request $req , $id){
        $this->validate($req,[
            'advice' => 'required'
        ]);
    	DB::update('update design_consultations set expert_advice = ? where id = ?',[$req->advice ,$id]);
        $consultation = Design_consultation::join('designers' ,
                        'design_consultations.designer_id' , 'designers.id')
                        ->where('design_consultations.id' , $id)
                        ->select('designers.*' , 'design_consultations.*')
                        ->get()
                        ->first();
        $username = $consultation->username;
        $email = $consultation->email;
        $data = array('welcome'=>'Dear '.$username.' ,Welcome to Runway','body'=>'We sending this email to you to inform you that your consultation with number #'.$id." has been replied");
        Mail::send('Email' , $data , function($message) use($email){
            $message->to($email)->subject('Welcome Email');
        });
    	return redirect('/edit_design_consultation_req/'.$id);
    }

}
