<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function records(){
        return $this->hasMany(Record::class,'game','title');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'title','game');
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
