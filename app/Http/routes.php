<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', ['as' => 'backslash', 'uses' => 'HomeController@index']);

Route::get('/feedback/{name}/new', function($name) {
		$name = ucfirst($name);
		$page_title = "Peer Feedback For ".$name;
    return view('new', compact('page_title', 'name'));
});

Route::get('/feedback/{name}/summarise', function($name) {
	$name = ucfirst($name);
	$page_title = "Summarise Peer Feedback For ".$name;
	return view('summarise', compact('page_title'));
});
