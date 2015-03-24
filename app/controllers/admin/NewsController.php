<?php

namespace controllers\admin;

class NewsController extends \BaseController
{
    public function index()
    {
        return \View::make('admin.news.index');
    }
}
