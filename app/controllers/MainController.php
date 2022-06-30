<?php

namespace app\controllers;

use phpCms\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = \R::findAll('test');
        $this->setMeta(App::$app->getProperty('shopName'), " ... ", "00000");
        $name = ['1234', '0000'];
        $this->set(compact('name', 'posts'));
    }
}
