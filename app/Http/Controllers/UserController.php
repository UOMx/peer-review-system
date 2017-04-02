<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $username=$request['username'];
        $password=$request['password'];
        if(($username=='student' && $password=='student')||($username=='lecturer' && $password=='lecturer')){
            
            return view('dashboard.index',compact('username'));
        }
        else{
            return redirect()->back();
        }

    }

    
}
