<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $hidden = [
        'id', 'created_at','updated_at', 'user_id', 'game_id',
    ];

    public function player(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function game(){
        return $this->belongsTo(Game::class,'game_id','id');
    }
}
