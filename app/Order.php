<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //


protected $fillable=[
  'type_id',
'service_id',
'usr_id',
'total_cost',
'delivery_cost',
'tax',
'status',
'pickup_location_longitude',
'pickup_location_Altitude',
'shipping_location_longitude',
'shipping_location_Altitude',
  ];



  public function order_details(){

    return $this->hasMany(Order_detail::class);
  }
  public function user(){

    return $this->belongsTo(User::class);
  }
public function order_type(){

  return $this->belongsTo(Order_type::class);
}
public function service(){

  return $this->belongsTo(Service::class);
}
}
