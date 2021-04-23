<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services_cat extends Model
{
    //
    protected $fillable=[  'name'
      ];
    public function services(){

      return $this->hasMany(Service::class);
    }
}
