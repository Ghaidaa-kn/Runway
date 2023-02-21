<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function bank_cards(){
        return $this->hasMany('App\bank_card');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function carts(){
        return $this->hasMany('App\Cart');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function customer_consultations(){
        return $this->hasMany('App\Customer_consultation');
    }

    public function request_designs(){
        return $this->hasMany('App\Request_design');
    }
}
