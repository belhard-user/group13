<?php
namespace App;

class Page
{
    public function index()
    {
        view('index');
    }

    public function about()
    {
        view('about');
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


        view('table');
    }
}