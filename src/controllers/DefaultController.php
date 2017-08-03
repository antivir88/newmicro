<?php

namespace App\Controllers;


class DefaultController extends \Micro\Web\Controller
{
    public function actionIndex()
    {
        //$this->response = $this->response->withStatus(400);

        $this->view->addParameter('hello', 'world!');
    }
    public function actionHello()
    {
        return '<h1>Hello, world! '.$this->container->get('kernel')->getCacheDir().'</h1>';
    }
}
