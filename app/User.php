<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
          'password','role_id',
'full_name',
'username',
'email',
'img',
'location',
'birthdate',
'phone',
'active',
'rate',
'verified',
'verified_email',
'verified_phone',
'online',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

      return $this->belongsTo(Role::class);
    }
    public function orders(){

    return $this->hasMany(Order::class);
  }
}
