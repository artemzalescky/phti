<?php

namespace application\controllers;

use application\models\ProductModel;
use ph\controller\BaseController;

class ProductController extends BaseController {

    public function index() {
        $products = ProductModel::getInstance()->getTopLevel();

        $this->setViewVariable('products', $products);
        $this->render();
    }

    public function show($productUrl) {
        $currentProduct = ProductModel::getInstance()->getByUrl($productUrl);

        if (empty($currentProduct)) {
            $this->redirect('404');
        }

        $pathToProduct = ProductModel::getInstance()->getPathToProduct($currentProduct);
        $productChildren = ProductModel::getInstance()->getChildren($currentProduct['id']);

        $this->setViewVariable('currentProduct', $currentProduct);
        $this->setViewVariable('pathToProduct', $pathToProduct);
        $this->setViewVariable('products', $productChildren);
        $this->render();
    }
}
