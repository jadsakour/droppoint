<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable=[
      'place_id',
'name',
'price',
'descriptions',
'notes',
'img',
      ];



      public function order_details(){

        return $this->hasMany(Order_detail::class);
      }

    public function service_provider(){

      return $this->belongsTo(Service_provider::class);
    }
}
