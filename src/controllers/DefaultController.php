<?php

namespace App\Controllers;


class DefaultController extends \Micro\Web\Controller
{
    public function actionIndex()
    {
        $this->response = $this->response->withStatus(200);
        $this->view->data = '<h1>Hello, world! wdqwdqwd</h1>';
    }
    public function actionHello()
    {
        return '<h1>Hello, world! '.$this->container->get('kernel')->getCacheDir().'</h1>';
    }
}
