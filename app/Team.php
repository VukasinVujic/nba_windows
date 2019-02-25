<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\User;


class Team extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'city'
    ];

    public function players(){
       return $this->hasMany(Player::class,'team_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'team_id');
    }
}
