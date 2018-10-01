<?php

spl_autoload_register(function($class_name){

    $filename = $class_name.".php";
    var_dump($filename);
    
    if (file_exists($filename)){

        require_once($filename);
        
    }
});


?>