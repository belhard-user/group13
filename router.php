<?php

$router->add('', 'PageController@index');
$router->add('table', 'PageController@table');
$router->add('about', 'PageController@about');
$router->add('about/phone', 'Contact@index');