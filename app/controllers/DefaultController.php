<?php

namespace App\Controllers;

use Micro\Web\RequestInjector;

class DefaultController extends \Micro\Mvc\Controllers\ViewController
{
    public function actionIndex()
    {
    }
    public function actionHello()
    {
        return '<h1>Hello, world! '. (new RequestInjector)->build()->getQueryParams()['abc'] .'</h1>';
    }
}
