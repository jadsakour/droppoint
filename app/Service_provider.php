<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_provider extends Model
{
    //
    protected $fillable=[
      'name',
      'isOpen',
  'open_time',
  'close_time',
  'place_type_id',
  'service_id',
  'location_longitude',
  'location_Altitude',
      ];



      public function items(){

        return $this->hasMany(Item::class);
      }
    public function place_type(){

      return $this->belongsTo(Place_type::class);
    }
    public function service(){

      return $this->belongsTo(Service::class);
    }
}
