<?php

namespace app\controllers;

use app\models\AppModel;
use app\widget\currency\Currency;
use phpCms\base\Controller;
use phpCms\App;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        ///setcookie('currency', 'EUR', time() + 3600*24*7, '/');
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        //debug(App::$app->getProperties());
    }
}
