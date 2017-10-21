<?php
use Core\Router;

require_once "core/bootstrap.php";

try{
    Router::init('router')->getPage();
}catch(\Exception $e){
    echo $e->getMessage();
}