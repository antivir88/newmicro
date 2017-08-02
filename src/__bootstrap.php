<?php

// SETUP START
$loader = require __DIR__ . '/../vendor/autoload.php'; /// Require Composer
//require __DIR__ . '/../../../frameworks/microphp-framework/src/base/Autoload.php'; // Require MicroPHP

//spl_autoload_register(['\Micro\Base\Autoload', 'loader'], true, false); // Add micro autoload into composer

//use \Micro\Base\Autoload;

//$loader->setPsr4('Micro', '/var/www/frameworks/microphp-framework/src');
//$loader->setPsr4('Micro\Web', '/var/www/frameworks/microphp-web/src');
$loader->setPsr4('App\\', __DIR__);
$loader->setPsr4('App\\Controllers\\', __DIR__ . '/controllers');

//Autoload::setAlias('Micro', '/var/www/frameworks/microphp-framework/src'); // тыкаем в намспейс фрейма
//Autoload::setAlias('Micro\Web', '/var/www/frameworks/microphp-web/src'); // тыкаем в подменку
//Autoload::setAlias('App', __DIR__); // тыкаем в приложение

// SETUP COMPLETE
