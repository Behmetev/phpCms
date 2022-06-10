<?php

namespace app\controllers;

use phpCms\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(App::$app->getProperty('shopName'), " ... ", "00000");
        /*
        $name = "dsdas";
        $age = 13;

        $this->set(compact('name', 'age'));
        */
    }
}
