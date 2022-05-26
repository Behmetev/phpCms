<?php

namespace phpCms;

class Registry
{
    use TSingltone;

    protected static $proretries = [];

    public function setProperty($name, $value)
    {
        self::$proretries[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$proretries[$name])) {
            return self::$proretries[$name];
        } else {
            return null;
        }
    }

    public function getPropertyes()
    {
        return self::$proretries;
    }
}
