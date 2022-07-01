<?php

namespace app\controllers;

use phpCms\App;
use phpCms\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->setMeta(App::$app->getProperty('shopName'), " ... ", "00000");
        $this->set(compact('brands', 'hits'));
    }
}
