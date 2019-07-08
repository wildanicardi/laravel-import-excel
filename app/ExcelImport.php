<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcelImport extends Model
{
    protected $fillable = [
        'orderid','skuid','popskuid','quantity','paytype',
        'booktime','totalprice'
        
     ];
     protected $hidden = [
         
     ];

}
