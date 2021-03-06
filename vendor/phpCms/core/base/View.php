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
    public function render($data)
    {
        if (is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if (is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Не найден вид {$viewFile}", 500);
        }
        if (false !== $this->layout) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($layoutFile)) {
                require_once $layoutFile;
            } else {
                throw new \Exception("Не найден шаблон {$this->layout}", 500);
            }
        }
    }

    public function getMeta()
    {
        $outPut = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $outPut .= '<meta name="disctiption" content="' . $this->meta['desc'] . '">' . PHP_EOL;
        $outPut .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
        return $outPut;
    }
}
