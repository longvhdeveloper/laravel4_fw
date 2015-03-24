<?php
class UserController extends BaseController
{
    public function index()
    {
        return View::make('user.index')
            ->nest("child", 'user.other');
    }

    public function show($id)
    {
        $data = array();
        $data['id'] = $id;
        return View::make('user.show', $data);
//return View::make('admin.user.show')->with('id', $id);
    }
}
