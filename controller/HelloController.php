<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 22.10.2017
 * Time: 18:24
 */

namespace App;


class HelloController
{
    public function index()
    {
        $name = isset($_GET['name']) ? $_GET['name'] : 'John';

        view('hello.index', [
            'name' => $name
        ]);
    }
}