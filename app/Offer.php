<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
  //
	public function products(){
		return $this->belongsToMany('App\Product', 'product_offer', 'offer_id', 'product_id'); 
	}
}
