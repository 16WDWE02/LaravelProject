<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
    	'user_id', 'product_id', 'size', 'quantity', 'subtotal'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function product(){
    	return $this->belongsTo('App\Products');
    }


}
