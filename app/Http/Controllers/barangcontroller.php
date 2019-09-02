<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class barangcontroller extends Controller
{
    public function getdata($roles){
        $role = $roles;
        $barang = Barang::all();
        return view('barang',compact('barang'));
    }
}
