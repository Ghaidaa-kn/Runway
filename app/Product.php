<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function offers()
	{
	    return $this->belongsToMany('App\Offer', 'product_offer', 'product_id', 'offer_id'); 
	}
}
