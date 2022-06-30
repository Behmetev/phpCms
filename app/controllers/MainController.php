<?php

namespace app\controllers;

use phpCms\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(App::$app->getProperty('shopName'), " ... ", "00000");
    }
}
