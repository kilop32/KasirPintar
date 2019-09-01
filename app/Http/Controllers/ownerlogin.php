<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ownerlogin extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/owner';
    
    public function __construct(){
        $this->middleware('owner')->except('logout')->except('index');
    }

    public function index(){
        return view('owner.home');
    }

    public function loginform(){
        return view('owner.login');
    }

    public function username()
    {
        return 'username';
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|string|unique:owner',
            'email'    => 'required|string|email|unique:owner',
            'password' => 'required|string|min:6|owner'
        ]);
        \App\Admin::create($request->all());
        return redirect()->route('owner.register')->with('success','Register Sukses');
    } 

    protected function guard(){
        return Auth::guard('owner');
    }
}
