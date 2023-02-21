<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function brand(){
    	return $this->belongsTo('App\Brand');
    }

    public function fashion_expert(){
    	return $this->belongsTo('App\fashion_expert');
    }
}
