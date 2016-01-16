<?php

namespace application\models;

use application\models\dao\DepartmentDAO;

class DepartmentModel {
    private static $instance;

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getDepartments() {
        try {
            return DepartmentDAO::getInstance()->getDepartments();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getMainDepartments() {
        try {
            return DepartmentDAO::getInstance()->getMainDepartments();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getDepartmentChildren($id) {
        try {
            return DepartmentDAO::getInstance()->getDepartmentChildren($id);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getDepartmentById($id) {
        try {
            return DepartmentDAO::getInstance()->getDepartmentById($id);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getDepartmentByUrl($url) {
        try {
            return DepartmentDAO::getInstance()->getDepartmentByUrl($url);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function gerRootDepartment() {
        return [
            'id' => 0,
            'parentId' => null,
            'nameRu' => 'Научные центры и отделы',
            'name' => 'Research centers and departments',
            'url' => 'department',
            'fullUrl' => 'department'
        ];
    }

    public function calculateChildrenFullUrl($parentDepartment, &$childDepartments) {
        $baseUrl = !empty($parentDepartment) ? $parentDepartment['url'] . '/' : '';
        for ($i = 0; $i < count($childDepartments); $i++) {
            $childDepartments[$i]['fullUrl'] = "$baseUrl{$childDepartments[$i]['url']}";
        }
    }

    public function getPathToDepartment($department) {
        try {
            $res = [];
            $parent = $department;
            if (!empty($department)) {
                $res[] = $parent;
                while (!empty($parent) && !empty($parent['parentId'])) {
                    $parent = $this->getDepartmentById($parent['parentId']);
                    $res[] = $parent;
                }
            }
            $res[] = $this->gerRootDepartment();
            $res = array_reverse($res);
            return $res;
        } catch (\Exception $e) {
            return [];
        }
    }

    public function calculateFullPathUrl(&$pathToDepartment) {
        $currentUrl = '';
        for ($i = 0; $i < count($pathToDepartment); $i++) {
            $currentUrl .= '/' . $pathToDepartment[$i]['url'];
            $pathToDepartment[$i]['fullUrl'] = $currentUrl;
        }
    }

    // base laboratories

    public function getBaseLaboratories() {
        try {
            return DepartmentDAO::getInstance()->getBaseLaboratories();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function getBaseLaboratoryById($id) {
        try {
            return DepartmentDAO::getInstance()->getBaseLaboratoryById($id);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getBaseLaboratoryByUrl($url) {
        try {
            return DepartmentDAO::getInstance()->getBaseLaboratoryByUrl($url);
        } catch (\Exception $e) {
            return null;
        }
    }
}
