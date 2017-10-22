<?php

namespace App;

use PDO;
use Core\Request;

class RegiterController
{
    public function register()
    {
        if(Request::isPost()){
            $pdo = new PDO('mysql:dbname=study;host=localhost', 'root', '');

            $name = $pdo->quote($_POST['name']);
            $pass = $pdo->quote($_POST['password']);

            $sql = "INSERT INTO people(name, password) VALUES ($name, $pass)";

            $pdo->exec($sql);

            Request::goBack();
        }

        view('register.register');
    }
}