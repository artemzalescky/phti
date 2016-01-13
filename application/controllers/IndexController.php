<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class IndexController extends BaseController {

    public function index() {
        // получение всех научных центров(department)

        // получение всех подлабораторий

        $departmentList = DepartmentModel::getInstance()->getMainDepartments();

        if (!empty($departmentList)) {
            for ($i = 0; $i < count($departmentList); $i++) {
                $children = DepartmentModel::getInstance()->getDepartmentChildren($departmentList[$i]['id']);
                 if (!empty($children)) {
                     $departmentList[$i]['children'] = $children;
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
