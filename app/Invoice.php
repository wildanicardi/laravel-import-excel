<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'total',
        'keterangan'
        
     ];
     protected $hidden = [
         
     ];

     public function user()
     {
         return $this->belongsTo('App\User');
     }
     public function order()
     {
         return $this->belongsTo('App\Order');
     }
}
