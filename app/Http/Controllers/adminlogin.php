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

    protected $guard = 'admin';
    protected $redirectTo = '/admin/home';
    
    public function __construct(){
        $this->middleware('guest:admin')->except('logout')->except('index');
    }

    public function index(){
        return view('admin.home');
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('admin.home');
        }
    }    

    protected function guard(){
        return Auth::guard('admin');
    }
    
    public function username()
    {
        return 'username';
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:199',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:6|confirmed'
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // return redirect()->route('registerform')->with('success','Registration Success');
    }
    // public function register(Request $request){
    //     $request->validate([
    //         'name' => 'required|string|unique:admin',
    //         'email'    => 'required|string|email|unique:admin',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    //     Admin::create($request->all());
    //     // return redirect()->route('admin.registerform')->with('success','Register Sukses');
    //     // return redirect()->route('admin.registerform')->with('success','Registration Success');
    // }  

    
}
 