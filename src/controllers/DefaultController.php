<?php

namespace App\Controllers;


class DefaultController extends \Micro\Web\Controller
{
    public function actionIndex()
    {
        $this->response = $this->response->withStatus(400);

        $this->view->setLayout('maket');
        $this->view->addParameter('model', 'world!');
    }

    public function actionHello()
    {
        $this->view->addParameter('str', '<h1>Hello, world! '.$this->container->get('kernel')->getCacheDir().'</h1>' );

        $this->view->setLayout('maket');
        $this->view->setView('index');
    }
}
