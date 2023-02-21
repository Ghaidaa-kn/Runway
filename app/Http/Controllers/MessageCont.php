<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\DB;
use App\Message;

class MessageCont extends Controller
{
    public function add_message(Request $req){
    	$this->validate($req,[
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required',
            'type' => 'required'
        ]);
    	$message = new Message();
    	$message->sender_email = $req->email;
    	$message->type = $req->type;
    	$message->message = $req->message;
    	$message->phone = $req->phone;
    	$message->save();
    	return redirect('/contact');
    }
}
