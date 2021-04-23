<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_type extends Model
{
    //
    protected $fillable=[  'type_name'
      ];
    public function orders(){

      return $this->hasMany(Order::class);
    }
}
