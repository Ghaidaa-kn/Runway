<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Comment;
use Session;

class CommentCont extends Controller
{
    public function add_comment(Request $req){
    	$this->validate($req,[
            'comment' => 'required'
        ]);
    	$userId = Session::get('user')['id'];
    	$comment = new Comment();
    	$comment->customer_id = $userId;
    	$comment->product_id = $req->product_id;
    	$comment->comment = $req->comment;
    	$comment->save();
    	return redirect('product/'.$req->product_id);
    }
}
