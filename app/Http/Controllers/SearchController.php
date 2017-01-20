<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use MongoDB\Driver\Query;

class SearchController extends Controller
{
    public function getGamesList(Request $request){

        $q = 0;
        if ($request->has('q'))
            $q = $request->get('q');
        else
            return '';

        $results = Game::where(function($query) use ($q)
        {
            $columns = ['title', 'abstract', 'info'];

            foreach ($columns as $column)
            {
                $query->orWhere($column, 'LIKE', '%'.$q.'%');
            }
        })->orderBy('updated_at', 'desc')->get();
        return $results;
    }
}
