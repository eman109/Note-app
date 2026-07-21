<?php

function base_path($path=""){
    return BASE_PATH . '/' . ltrim($path, '/');
}

function redirect($path){
    header("Location:  $path");
    exit();
}

function url($path = '')
{
    return BASE_URL . '/' . ltrim($path, '/');
}

function view($path, $data = [])
{
    extract($data);
    require base_path('views/' . $path);
}