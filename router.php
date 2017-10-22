<?php

$router->add('', 'PageController@index');
$router->add('table', 'PageController@table');
$router->add('about', 'PageController@about');
$router->add('about/phone', 'Contact@index');
$router->add('say-hello', 'HelloController@index');

$router->add('register', 'RegiterController@register');