<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $hidden = [
        'id', 'created_at','updated_at',
    ];

    public function records(){
        return $this->hasMany(Record::class,'id','game_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'id','game_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
