<?php

namespace application\models\dao;

use ph\db\DbDataAccessObject;

class ProductFieldDAO extends DbDataAccessObject {
    private static $instance;

    public function __construct() {
        parent::__construct('product_field');
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getByProductId($productId) {
        return parent::getBy([
            'product_id' => $productId
        ]);
    }

    public function getById($id) {
        return parent::getBy([
            'id' => $id
        ])[0];
    }
}
