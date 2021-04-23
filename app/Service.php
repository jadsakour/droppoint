<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable=[
      'name',
      'cost',
      'cat_id'
      ];


      public function service_providers(){

        return $this->hasMany(Service_provider::class);
      }
      public function orders(){

        return $this->hasMany(Orders::class);
      }
    public function services_cat(){

      return $this->belongsTo(Services_cat::class);
    }
}
