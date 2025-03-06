<?php

spl_autoload_register(function(string $class ){

    $path = str_replace('\\','/', $class) . ".php";
    var_dump($path);

    require $path;

});