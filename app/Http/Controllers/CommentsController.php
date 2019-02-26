<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Player;
use App\Team;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\CommentRecevied;


class CommentsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }

    public function store(Request $request,$team_id)
    {
        $request->validate([
            'content' => 'required|min:10'
        ]);

        $team = Team::find($team_id);
        

    // Comment::create([
       $comment = Comment::create([
        'content'=>$request->get('content'),
        'team_id'=>$team->id,
        'user_id'=>Auth::User()->id
       ]);

    // return redirect()->route('showTeam',['id' => $team_id]);
        if($comment->team) {
            \Mail::to($comment->team)->send(new CommentRecevied(
                $comment->team,$comment
            ));
        }
        return redirect()->back();

    }
}
