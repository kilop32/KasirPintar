<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class stafflogin extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/staff';
    
    public function __construct(){
        $this->middleware('staff')->except('logout')->except('index');
    }

    public function index(){
        return view('staff.home');
    }

    public function loginform(){
        return view('staff.login');
    }

    public function username()
    {
        return 'username';
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|string|unique:staff',
            'email'    => 'required|string|email|unique:staff',
            'password' => 'required|string|min:6|staff'
        ]);
        \App\Admin::create($request->all());
        return redirect()->route('staff.register')->with('success','Register Sukses');
    } 

    protected function guard(){
        return Auth::guard('staff');
    }
}
