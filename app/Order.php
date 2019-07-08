<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'produk_id', 'qty','pembayaran','status','orderid',
    ];

 
    protected $hidden = [
    ];

     public function user()
     {
         return $this->belongsTo('App\User');
     }
     public function produk()
     {
         return $this->belongsTo('App\Produk');
     }
}
