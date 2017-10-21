<?php


function view($templateName)
{
    $html = \Core\App::get('engine')->view()->make($templateName)->render();

    echo $html;
}