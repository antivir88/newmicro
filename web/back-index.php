<?php

require '../src/__bootstrap.php';

//   create request and kernel
$request = \Zend\Diactoros\ServerRequestFactory::fromGlobals( $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES );
$kernel = new \App\Kernel('devel', true);

//   create application
$application = new \Micro\Mvc\MvcApplication($kernel);

//   run app for request
$response = $application->run($request);
$application->send($response);

//   kill app
$application->terminate();
