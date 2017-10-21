<?php


class Page
{
    public function index()
    {
        require_once "views/index.view.php";
    }

    public function about()
    {
        require_once "views/about.view.php";
    }

    public function table()
    {
        $title = 'Юхууу';
        $pageTitle = 'Юхууу';


        $rows = 10;
        $cols = 10;
        $color = '#369';


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $rows = $_POST['rows'];
            $cols = $_POST['cols'];
            $color = $_POST['color'];
        }


        require_once 'views/table.view.php';
    }
}