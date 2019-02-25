<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }

    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){

        
        $this->validate($request,[
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only(['email','password']))){
            return back()->withErrors([
                'message' => 'Wrong login intake'
            ]);
        } 
        return redirect()->route('allTeams');
    }
}
