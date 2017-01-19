<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsToMany(User::class,'email','player');
    }
    public function game(){
        return $this->belongsToMany(Game::class,'title','game');
    }
}
