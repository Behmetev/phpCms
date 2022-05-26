<?php

namespace phpCms;

class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regExp, $route = [])
    {
        self::$routes[$regExp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }
}
