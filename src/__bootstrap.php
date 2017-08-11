<?php

// SETUP START

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->setPsr4('App\\', __DIR__);
$loader->setPsr4('App\\Controllers\\', __DIR__ . '/controllers');

// SETUP ELSE // NATIVE

//require __DIR__ . '/../../../frameworks/microphp-framework/src/base/Autoload.php'; // Автолоадер
//spl_autoload_register(['\Micro\Base\Autoload', 'loader'], true, false); // Регаем автолоадер
//use \Micro\Base\Autoload;
//Autoload::setAlias('Micro', '/var/www/frameworks/microphp-framework/src'); // тыкаем в намспейс фрейма
//Autoload::setAlias('Micro\Web', '/var/www/frameworks/microphp-web/src'); // тыкаем в подменку
//Autoload::setAlias('App', __DIR__); // тыкаем в приложение

// SETUP COMPLETE
