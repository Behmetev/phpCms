<?php

namespace app\controllers;

use Exception;

class ProductController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', 'alias = ? AND status = "1"', [$alias]);
        if (!$product) {
            throw new \Exception('Страница не найдена', 404);
        }

        //debug($product);

        $this->setMeta(
            $product->title,
            $product->description,
            $product->ketwords
        );
        $this->set(compact('product'));
    }
}
