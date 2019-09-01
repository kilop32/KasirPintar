<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable=[
        'username','email','password'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

    public function setPasswordAttribute($val){
        return $this->attributes['password'] = bcrypt($val);
    }
}
