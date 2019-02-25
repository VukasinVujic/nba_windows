<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\User;
use App\Player;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('Teams.index', compact('teams'));
    }

    public function show($id){

        $team = Team::findOrFail($id);
        // $team = Team::with('Players','comments.user')->find($id);
        return view('Teams.show', compact('team'));
    }
}
