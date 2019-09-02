<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function loginview($roles){

        $role= $roles;
        return view('loginform',compact('role'));
    }

    public function registerform(){
       return view('registerform');
    }
}