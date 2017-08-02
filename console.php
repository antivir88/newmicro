<?php /** MICRO TESTER */

require './src/__bootstrap.php';

// create request
$request = \Zend\Diactoros\ServerRequestFactory::fromGlobals( $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES );
$kernel = new \App\Kernel('prod', false);

// create application
$application = new \App\ConsoleApplication($kernel);

// run app for request
$response = $application->run($request);
$application->send($response);

// kill app
$application->terminate();
