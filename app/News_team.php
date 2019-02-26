<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News_team extends Model
{

    protected $fillable = [
        'user_id', 'title', 'content'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
