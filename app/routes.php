<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello', function(){
    return View::make('hellopage');
});

Route::get('/user', 'UserController@index');

Route::get('/user/show/{id}', 'UserController@show');

View::share('demo', 'Content demo');

View::composer(array('user.show', 'user.index'), 'DemoComposer');

Route::get('admin/news', "controllers\admin\NewsController@index");
