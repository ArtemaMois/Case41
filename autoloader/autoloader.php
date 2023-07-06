<?php
declare (strict_types = 1);

spl_autoload_register(function(string $class) {
    $path = __DIR__."/Classes/$class.php";
    if(is_readable($path)){
        require $path;
    }
});