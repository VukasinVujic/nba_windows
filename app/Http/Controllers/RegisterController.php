<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerification;

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

        // $data =$request->only([ 'name','email', 'password','password_confirmation']);

        // $data['password']=bcrypt($data['password']);

        // $user =user::create($data);
        //     auth()->login($user);
        // // return redirect()->route('allTeams'); // ovo je do sestog zadataka vazilo
        // return redirect()->route('login');

            $user = User::create ([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'is_verified' => false
            ]);

            Mail::to($request->email)->send(new UserVerification($user));
        

            return redirect()->route('login');
    }
}
