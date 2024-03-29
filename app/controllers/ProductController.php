<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', 'alias = ? AND status = "1"', [$alias]);
        if (!$product) {
            throw new \Exception('Страница не найдена', 404);
        }

        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

        $gallery = \R::findAll("gallery", "product_id = ?", [$product->id]);

        $p_model = new Product();
        $p_model->setRecentlyViwed($product->id);

        $r_viewed = $p_model->getRecentlyViwed();
        $resentlyViwed = null;

        if ($r_viewed) {
            $resentlyViwed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
        }

        $this->setMeta(
            $product->title,
            $product->description,
            $product->ketwords
        );

        $this->set(compact('product', 'related', 'gallery', 'resentlyViwed'));
    }
}
