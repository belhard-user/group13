<?php


function view($templateName, $variable = [])
{
    $html = \Core\App::get('engine')->view()->make($templateName, $variable)->render();

    echo $html;
}