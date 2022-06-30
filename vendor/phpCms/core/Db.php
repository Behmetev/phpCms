<?php

namespace phpCms;

use Exception;

class Db
{

    use TSingltone;
    protected function __construct()
    {
        $db = require_once CONF . '/configdb.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);

        if (!\R::testConnection()) {
            throw new Exception("нет соединения с БД", 500);
        }
        \R::freezee(true);
        if (DEBUG) {
            \R::debug(true, 1);
        }
    }
}
