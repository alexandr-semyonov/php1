<?php

function __autoload($class){
    if (0 === strpos($class, 'App')){
        $name = str_replace('\\', '/', $class);
        require __DIR__ . '/' . $name . '.php';
    }
}