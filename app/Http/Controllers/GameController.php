<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Game;
use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function getHeader($title) {
        $game = Game::with('categories')->where('title', '=', $title)->get();

        $temp = ["game" => $game[0]];
        $response = ["ok" => true, "result" => $temp];
        $result = ["response" => $response];
        return $result;
    }

    public function getInfo($title)
    {
        return $this->getHeader($title);
    }

    public function getLeaderboard($title)
    {
        $games = Game::where('title', '=', $title)->get();
        $leaderboard = Record::with('player')->where('game_id', '=', $games[0]->id)->orderBy('score', 'DESC')->take(10)->get();

        $userRecord=0;
        if($user = Auth::user()) {
            $userRecord = Record::with('player')->where('game_id', '=', $games[0]->id)->where('user_id', '=', $user->id)->get();
        }

        $temp = ["leaderboard" => $leaderboard];
        $response = ["ok" => true, "result" => $temp, "userRecord"=>$userRecord];
        $result = ["response" => $response];
        return $result;
    }

    public function getComments($title, Request $request)
    {
        $offset = 0;
        if ($request->has('offset'))
            $offset = $request->get('offset');
        $games = Game::where('title', '=', $title)->get();
        $comments = Comment::with('player')->with('game')->where('game_id', '=', $games[0]->id)->orderBy('created_at', 'DESC')->skip($offset)->take(10)->get();

        $temp = ["comments" => $comments];
        $response = ["ok" => true, "result" => $temp];
        $result = ["response" => $response];
        return $result;
    }

    public function getRelatedGames($title)
    {
        $game = Game::with('categories')->where('title', '=', $title)->get();
        $categories = $game[0]->categories;
        $game_category = collect();
        foreach ($categories as $category) {
            $game_category->push($category->games()->with('categories')->get());
        }
        foreach ($game_category[0] as $gc) {
            foreach ($gc->categories as $key) {
                $gc->categories->prepend($key->title);
                $gc->categories->pop();
            }
        }
        $result = ["games" => $game_category->collapse()->unique('title')->values()];
        $response = ["ok" => true, "result" => $result];
        $result = ["response" => $response];
        return $result;
    }
}
