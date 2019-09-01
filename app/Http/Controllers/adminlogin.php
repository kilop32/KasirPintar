<?php

namespace App\Http\Controllers;

use \App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class adminlogin extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';
    
    public function __construct(){
        $this->middleware('guest:admin')->except('logout')->except('index');
    }

    public function index(){
        return view('admin.home');
    }

    public function loginform(){
        return view('admin.loginform');
    }

    public function registerform(){
        return view('admin.registerform');
    }
    
    public function username()
    {
        return 'username';
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|unique:admin',
            'email'    => 'required|string|email|unique:admin',
            'password' => 'required|string|min:6|confirmed',
        ]);
        Admin::create($request->all());
        return redirect()->route('admin.registerform')->with('success','Register Sukses');
    } 

    protected function guard(){
        return Auth::guard('admin');
    }
}
 