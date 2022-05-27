<?php

namespace phpCms\base;

class View
{
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];


    public function __construct($route, $layout = "", $view = "", $meta)
    {
        $this->route = $route;
        $this->view = $view;
        $this->meta = $meta;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];

        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }
}
