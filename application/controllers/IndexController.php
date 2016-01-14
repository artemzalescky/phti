<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class IndexController extends BaseController {

    public function index() {
        // получение всех научных центров(department)
        // получение всех подлабораторий

        $childDepartments = DepartmentModel::getInstance()->getMainDepartments();
        DepartmentModel::getInstance()->calculateChildrenFullUrl(null, $childDepartments);
        if (!empty($childDepartments)) {
            for ($i = 0; $i < count($childDepartments); $i++) {
                $children = DepartmentModel::getInstance()->getDepartmentChildren($childDepartments[$i]['id']);
                 if (!empty($children)) {
                     $childDepartments[$i]['children'] = $children;
                     DepartmentModel::getInstance()->calculateChildrenFullUrl(
                         $childDepartments[$i],
                         $childDepartments[$i]['children']
                     );
                }
            }
        }
        $this->setViewVariable('departmentList', $childDepartments);
        //----------------------------------------------------------------------------------------

        // получение всех независимых лабораторий
        $this->setViewVariable('baseLaboratories', DepartmentModel::getInstance()->getBaseLaboratories());

        $this->render([
            'layout' => 'index'
        ]);
    }
}
