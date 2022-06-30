<?php

namespace app\controllers;

use phpCms\App;
use phpCms\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = \R::findAll('test');
        $this->setMeta(App::$app->getProperty('shopName'), " ... ", "00000");

        // $name = "01010";
        // $name = ['1234', '0000'];
        // $cache = Cache::instance();
        // $cache->set('test', $name);

        $this->set(compact('name', 'posts'));
    }
}
