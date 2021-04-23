<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
    protected $fillable=[  'type_name'
    'order_id',
'item_id',
'free_order',
 'notes',
'quantity',
      ];
  
    public function order(){

      return $this->belongsTo(Order::class);
    }
    public function item(){

      return $this->belongsTo(Item::class);
    }
}
