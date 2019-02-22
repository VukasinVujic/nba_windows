<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('Teams.index', compact('teams'));
    }

    public function show($id){

        $team = Team::findOrFail($id);
        return view('Teams.show', compact('team'));
    }
}
