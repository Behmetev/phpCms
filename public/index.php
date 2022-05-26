<?php

use phpCms\App;

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new App();
debug(App::$app->getPropertyes());
