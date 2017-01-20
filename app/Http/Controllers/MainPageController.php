<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Game;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function getHeaderTest(){
        return view('headerTest');
    }
    public function getVerifiedPage() {
        return view('email\verified');
    }

    public function getHomePage() {
        $slider = Game::with('categories')->orderBy('rate', 'desc')->take(10)->get();
        $new_games = Game::with('categories')->orderBy('updated_at', 'desc')->take(12)->get();
        $comments = Comment::with('player')->with('game')->orderBy('updated_at', 'desc')->take(30)->get();
        $tutorials = Game::with('categories')->orderBy('updated_at', 'desc')->take(12)->get();

        $results = ["slider" => $slider, "new_games" => $new_games, "comments" => $comments, "tutorials" => $tutorials];
        $temp = ["homepage" => $results];
        $response = ["ok" => true, "result" => $temp];
        $result = ["response" => $response];
        return $result;
    }
}
