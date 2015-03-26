<?php

class LayoutController extends BaseController
{
    public function index()
    {
        $data = '<script>alert("Hello Laravel");</script>';
        $data2 = [
            'php', 'asp', 'jsp'
        ];
        return View::make('layout')->with('id', 99)->with('data', $data2)->with('titlepage' , 'Layout page');
    }
} 