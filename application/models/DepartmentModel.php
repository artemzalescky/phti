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
