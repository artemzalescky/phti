<?php

namespace application\models\dao;

use ph\db\DbDataAccessObject;

class ProductDAO extends DbDataAccessObject {
    private static $instance;

    public function __construct() {
        parent::__construct('product');
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getById($id) {
        return parent::getBy([
            'id' => $id
        ])[0];
    }

    public function getByUrl($url) {
        return parent::getBy([
            'url' => $url
        ])[0];
    }

    public function getByDepartmentId($departmentId) {
        return parent::getBy([
            'department_id' => $departmentId
        ]);
    }

    public function getChildren($parentProductId) {
        return parent::getBy([
            'parent_id' => $parentProductId
        ]);
    }

    public function getTopLevel() {
        return $this->getChildren(0);
    }
}
