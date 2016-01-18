<?php

namespace application\models\dao;

use ph\db\DbDataAccessObject;

class DepartmentDAO extends DbDataAccessObject {
    private static $instance;

    public function __construct() {
        parent::__construct('department');
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getDepartments() {
        return parent::getBy([
            'type' => 1
        ]);
    }

    public function getMainDepartments() {
        return parent::getBy([
            'type' => 1,
            'parent_id' => 0
        ]);
    }

    public function getDepartmentChildren($id) {
        return parent::getBy([
            'type' => 1,
            'parent_id' => $id
        ]);
    }

    public function getDepartmentById($id) {
        return parent::getBy([
            'id' => $id
        ])[0];
    }

    public function getDepartmentByUrl($url) {
        return parent::getBy([
            'url' => $url
        ])[0];
    }

    // base laboratories

    public function getBaseLaboratories() {
        return parent::getBy([
            'type' => 0
        ]);
    }

    public function getBaseLaboratoryById($id) {
        return parent::getBy([
            'id' => $id
        ])[0];
    }

    public function getBaseLaboratoryByUrl($url) {
        return parent::getBy([
            'url' => $url
        ])[0];
    }


}
