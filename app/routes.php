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

View::share('title', 'Demo Controller- View - With Laravel Framework');

View::composer(array('news.index', 'news.detail'), function($view){
    $menu = array(
        "1" => "Lập trình PHP",
        "2" => "Đồ Họa",
        "3" => "Phân tích thiết kế hệ thống",
        "4" => "Làm chủ CMS",
    );
    $view->with('menu', $menu);
});

###################################################################

$action = function($page = '', $id = ''){
    return 'Route/vd1 active . Page : ' . $page . ' - Id : '. $id;
};

Route::get('route/vd1/{page}/{id?}',$action)->where(array(
    'page' => '[a-zA-Z\-]+',
    'id' => '[0-9]+'
));

Route::get('route/vd2/{page}', function($page){
    return View::make('hellopage')->with('page', $page);
});

Route::get('qhonline/test', array('as' => 'qhotest', function(){
    return 'Qho test page';
}));

Route::get('route/user', array(
    'as' => 'route_user',
    'uses' => 'UsersController@index'
));

Route::group(array('before' => 'checklogin'), function(){
    Route::get('qhonline/vd123', function(){
        return 'qhonline testing';
    });
});


Route::group(array('prefix' => 'qhonline'), function(){
    Route::get('user', function(){
        return 'qhonline testing user';
    });

    Route::get('news', function(){
        return 'qhonline testing news';
    });
});

Route::group(array('domain' => 'jackie.todo.vn'), function(){
    Route::get('my/profile', function(){
        return 'my profile jackie';
    });
});