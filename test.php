<?php
require_once "vendor/autoload.php";

try{
    $pdo = new PDO('mysql:dbname=study;host=localhost', 'root', '');
    // $pdo = new PDO('sqlite:test.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $name = 'S\'mith';
    $email = strtolower($name) . '@gmail.com';
    $name = $pdo->quote($name);
    $email = $pdo->quote($email);

    /*$sql = "INSERT INTO users (name, email) VALUES ($name, $email)";
    $pdo->exec($sql);*/
    $sql = "SELECT * FROM users";
    $r = $pdo->query($sql);

    // dump($r->fetchAll(PDO::FETCH_OBJ));

    while($row = $r->fetch(PDO::FETCH_LAZY)){
        dump($row);
    }



}catch (PDOException $e){
    echo $e->getMessage();
}
