<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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
        } else {
            if(auth()->user()->is_verified){
                return redirect()->route('allTeams');
            } else {
                $this->destroy();
                return back()->withErrors([
                    'message'=> 'you are not verified, check your mail for verification'
                ]);
            }
        } 
    }

    public function verification($id){

        $user = User::find($id);
        
        $user->is_verified=true;
        $user->save();
        return view('auth.verification',compact('user'));
    }
}
