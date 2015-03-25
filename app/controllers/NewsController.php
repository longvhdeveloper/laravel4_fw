<?php
class NewsController extends BaseController
{
    public $menu = array(
        "1" => "Lập trình PHP",
        "2" => "Đồ Họa",
        "3" => "Phân tích thiết kế hệ thống",
        "4" => "Làm chủ CMS",
    );

    public $data = array(
        array(
            "title" => "PHP Cơ Bản",
            "price" => "1.000.000 VNĐ"
        ),
        array(
            "title" => "PHP Nâng Cao",
            "price" => "1.800.000 VNĐ"
        ),
        array(
            "title" => "Codeigniter Framework",
            "price" => "1.600.000 VNĐ"
        ),
        array(
            "title" => "Laravel Framework",
            "price" => "1.600.000 VNĐ"
        ),
    );

    public $viewData = array();

    public function index()
    {
        $this->viewData['menu'] = $this->menu;
        $this->viewData['data'] = $this->data;
        $this->viewData['title'] = 'Demo Controller- View - With Laravel Framework';

        return View::make('news.index', $this->viewData);
    }

    public function detail($id)
    {
        $this->viewData['title'] = 'Demo Controller- View - With Laravel Framework';

        $this->viewData['menu'] = $this->menu;

        $this->viewData['data'] = $this->data[$id];

        return View::make('news.detail', $this->viewData);
    }

}
