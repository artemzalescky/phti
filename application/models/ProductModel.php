<?php

namespace application\models;

use application\models\dao\ProductDAO;

class ProductModel {
    private static $instance;

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getById($id) {
        try {
            return ProductDAO::getInstance()->getById($id);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getByUrl($url) {
        try {
            return ProductDAO::getInstance()->getByUrl($url);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getByDepartmentId($departmentId) {
        try {
            return ProductDAO::getInstance()->getByDepartmentId($departmentId);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getChildren($parentProductId) {
        try {
            return ProductDAO::getInstance()->getChildren($parentProductId);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getTopLevel() {
        try {
            return ProductDAO::getInstance()->getTopLevel();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getPathToProduct($product) {
        try {
            $res = [];
            $parent = $product;
            if (!empty($product)) {
                $res[] = $parent;
                while (!empty($parent) && !empty($parent['parentId'])) {
                    $parent = $this->getById($parent['parentId']);
                    $res[] = $parent;
                }
            }
            $res = array_reverse($res);
            return $res;
        } catch (\Exception $e) {
            return [];
        }
    }
}
