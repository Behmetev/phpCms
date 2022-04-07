<?php

use phpCms\App;

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . 'function.php';

new App();
var_dump(App::$app->getPropertyes());