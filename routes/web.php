<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'MainPageController@getHomePage');

Route::get('/games', 'GameController@getGamePage');
Route::get('/games/{title}/header', 'GameController@getHeader');
Route::get('/games/{title}/info', 'GameController@getInfo');
Route::get('/games/{title}/leaderboard', 'GameController@getLeaderboard');
Route::get('/games/{title}/comments', 'GameController@getComments');
Route::get('/games/{title}/related_games', 'GameController@getRelatedGames');
Route::get('/games/{title}/gallery', 'GameController@getGallery');
Route::get('/games/{title}/tempcomments/addcomment', 'GameController@addComment');
Route::get('/games/{title}/tempcomments', 'GameController@getTempCommentPage');

Route::get('/games_list', 'SearchController@getGamesList');

Route::get('/header', 'MainPageController@getHeaderTest');
Route::get('/homepage', 'MainPageController@getHomePage');
Route::get('/homepageInfo', 'MainPageController@getHomePageInfo');
Route::get('/verified', 'MainPageController@getVerifiedPage');

Route::get('/logout','auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index');
