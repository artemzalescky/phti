<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class IndexController extends BaseController {

    public function index() {
        // получение всех научных центров(department)
        $this->setViewVariable('mainDepartments', DepartmentModel::getInstance()->getMainDepartments());


        // получение всех подлабораторий
        if (!empty($mainDepartments)) {
            for ($i = 0; $i < count($mainDepartments); $i++) {
                $children = DepartmentModel::getInstance()->getDepartmentChildren($mainDepartments[$i]['id']);
                if (!empty($children)) {
                    $mainDepartments[$i]['children'] = $children;
                }
            }
        }

        $this->setViewVariable('departmentList', $departmentList);
        //----------------------------------------------------------------------------------------

        // получение всех независимых лабораторий
        $this->setViewVariable('baseLaboratories', DepartmentModel::getInstance()->getBaseLaboratories());
        $this->render([
            'layout' => 'index'
        ]);
    }
}
