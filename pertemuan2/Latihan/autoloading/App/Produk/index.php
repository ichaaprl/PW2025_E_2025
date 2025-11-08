<?php

require_once 'App/index.php';

$cat = new Cat();
echo $cat->run();

spl_autoload_register(function ($class){
    require_once _DIR_ . '/Produk/' . $class . '.php' ;
})
?>