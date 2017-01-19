<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    public function comments(){
        return $this->hasMany(Comment::class,'id','user_id');
    }
    public function records(){
        return $this->hasMany(Record::class,'id','user_id');
    }
}
