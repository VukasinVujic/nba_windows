<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    public function index(){

        $players = Player::all();
        return view('Players.index', compact('players'));
    }

    public function show($id){

        $player = Player::findOrFail($id);
        return view('Players.show', compact('player'));

    }
}
