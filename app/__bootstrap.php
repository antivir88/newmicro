<?php $frameworks = '/var/www/frameworks/microphp-';

// SETUP START
require __DIR__ . '/../vendor/autoload.php'; /// Require Composer
require $frameworks . 'framework/src/base/Autoload.php'; // Require MicroPHP

spl_autoload_register(['\Micro\Base\Autoload', 'loader'], true, false); // Add micro autoload into composer

\Micro\Base\Autoload::setAlias('Micro', $frameworks . 'framework/src'); // тыкаем в намспейс фрейма
\Micro\Base\Autoload::setAlias('Micro\Web',$frameworks . 'web/src'); // тыкаем в подменку
\Micro\Base\Autoload::setAlias('App', __DIR__); // тыкаем в приложение
// SETUP COMPLETE
