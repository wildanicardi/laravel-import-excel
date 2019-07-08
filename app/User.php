<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password','alamat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function invoice()
     {
         return $this->hasMany('App\Invoice');
     }
     public function order()
     {
         return $this->hasMany('App\Order');
     }
     public function excel()
     {
         return $this->hasOne('App\ExcelImport');
     }
     public function produk()
     {
         return $this->hasMany('App\Produk');
     }
}
