<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place_type extends Model
{
    //
    protected $fillable=[  'place_name'
      ];
    public function service_providers(){

      return $this->hasMany(Service_provider::class);
    }

}
