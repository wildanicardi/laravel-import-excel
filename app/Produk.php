<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'user_id', 'sku_id', 'produk','harga'
    ];

 
    protected $hidden = [
    ];

     public function user()
     {
         return $this->belongsTo('App\User');
     }
     public function order()
     {
         return $this->hasMany('App\Order');
     }
}
