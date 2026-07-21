<?php

function base_path($path=""){
    return BASE_PATH . '/' . ltrim($path, '/');
}

function redirect($path){
    header("Location:  $path");
    exit();
}
