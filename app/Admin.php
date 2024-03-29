<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $fillable=[
        'name','email','password',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public function setPasswordAttribute($val){
        return $this->attributes['password'] = bcrypt($val);
    }
}
