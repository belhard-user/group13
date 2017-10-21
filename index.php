<?php
require_once "core/bootstrap.php";

try{
    require_once Router::init('router')->getPage();
}catch(\Exception $e){
    echo $e->getMessage();
}