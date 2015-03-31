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

Route::get('route/user/{id}', array(
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
Route::get('layout', 'LayoutController@index');

Route::get('url/full', function(){
    return URL::full();
});

Route::get('url/asset', function(){
   return URL::asset('public/style/main.css', true);
});

Route::get('url/to', function(){
    return URL::to('admin/user', array('edit', 'jackie'), true);
});

Route::get('url/route', function(){
    return URL::route('route_user', array('11'));
});

Route::get('url/action', function(){
    return URL::action('LayoutController@index');
});

include('macros.php');

Route::get('form/create', function(){
    return View::make('form_view');
});

Route::get('validate/form', function(){
    return View::make('formvalid');
});

Route::post('validate/process', function(){
    $data = Input::all();

    $rules = array(
        'username' => 'required|min:3|qhonline:8',
        'password' => 'required|confirmed',
        'email' => 'email'
    );

    $messages = array(
        'username.required' => 'Vui long nhap username',
        'password.required' => 'Vui long nhap mat khau',
        'qhonline' => 'Gia tri nhap vao khong dung',
    );

    $valid = Validator::make($data, $rules, $messages);

    if ($valid->passes()) {
        return 'It is OK';
    } else {
        return Redirect::to('validate/form')->withErrors($valid);
    }
});

//Validator::extend('qhonline', function($field, $value, $params){
//    if ($value == 'qhonline') {
//        return true;
//    } else {
//        return false;
//    }
//});

Validator::extend('qhonline', 'QhonlineValidate@qhonline');

Route::get('res/test', function(){
    //return Redirect::to('res/test2');
    return Redirect::route('res.test2', array('999'));
});

Route::get('res/test2/{id}',array('as' => 'res.test2', function($id){
    return 'Hello Laravel Framework . Id : ' . $id;
}));

Route::get('res/test3', function(){
    $array = array(
        'username' => 'jackie',
        'password' => '12345',
        'level' => 2
    );
    return Response::json($array);
});

Route::get('res/test4', function(){
    return Response::download('url');
});

Route::get('res/test5', function(){
    $res = Response::make('<?xml version="1.0"?><root><data>Hello Laravel Framework</data></root>', '200');
    $res->headers->set('content-type', 'text/xml');
    return $res;
});

Route::get('input/form', function(){
    return View::make('form_input');
});

Route::post('input/process', function(){
    $data = Input::except('user', 'pass');

    echo '<pre>';
    print_r($data);
    echo '</pre>';
});

Route::get('input/test', function(){
    //Input::flash();
    return Redirect::to('input/test2')->withInput(Input::only('user'));
});

Route::get('input/test2', function(){
    $data = Input::old();

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    return "Hello Laravel Input";
});

Route::get('upload/form', function(){
    return View::make('form_upload');
});

Route::post('upload/process', function(){
    $data = Input::all();
//    echo '<pre>';
//    print_r($data);
//    echo '</pre>';
//
//    echo 'Size : ' .$data->getSize() . '<br/>';
//    echo 'Size : ' .$data->getRealPath() . '<br/>';
//    echo 'Size : ' .$data->getClientOriginalName() . '<br/>';
//    echo 'MimeType : ' .$data->getMimeType() . '<br/>';
//    echo 'Real path : ' .$data->getRealPath() . '<br/>';

    $rules = array(
        'img' => 'image|min:10'
    );

    $valid = Validator::make($data, $rules);

    if ($valid->passes()) {
        $image = $data['img'];
        $isUpload = $image->move('uploads/img', $image->getClientOriginalName());

        if ($isUpload) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    } else {
        return Redirect::to('upload/form')->withErrors($valid);
    }

});