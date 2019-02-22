<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6', 
            'password_confirmation'=> 'required|min:6'
        ]);

        $data =$request->only([ 'name','email', 'password','password_confirmation']);

        $data['password']=bcrypt($data['password']);

        user::create($data);

        return redirect()->route('allTeams');

    }
}
