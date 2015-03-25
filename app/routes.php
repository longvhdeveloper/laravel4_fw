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

Route::get('news', 'NewsController@index');

Route::get('news/detail/{id}', 'NewsController@detail')->where(
    array('id' => '[0-9]+')
);

Route::get('filter/test', function(){
    $str = '<form action="'.URL::to('filter/test_submit').'" method="post">';
    $str .= '<input type="text" name="num" size="15" /><br/>';
    $str .= '<input type="submit" name="fsubmit" value="Submit" />';
    $str .= "</form>";

    return $str;
});

################################
// Before -> Router -> After(not return)
################################
// Route::post('filter/test_submit', array('before' => 'number:'.Input::get('num').'|even', function(){
//     return 'It is OK';
// }));

Route::post('filter/test_submit', array('before' => 'number:'.Input::get('num').'|even', function(){
    return 'It is OK';
}));

Route::when('admin/*', 'checkAdmin');