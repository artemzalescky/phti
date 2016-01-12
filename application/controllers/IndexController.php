<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class IndexController extends BaseController {

    public function index() {
        // получение всех научных центров(department)
        $this->setViewVariable('mainDepartments', DepartmentModel::getInstance()->getMainDepartments());

        // получение всех подлабораторий
        $listLab = DepartmentModel::getInstance()->getMainDepartments();

        if (!empty($listLab)) {
            for ($i = 0; $i < count($listLab); $i++) {
                $children = DepartmentModel::getInstance()->getDepartmentChildren($listLab[$i]['id']);
                 if (!empty($children)) {
                     $listLab[$i]['children'] = $children;
                }
            }
        }
        $this->setViewVariable('listLab', $listLab);
        //----------------------------------------------------------------------------------------

        // получение всех независимых лабораторий
        $this->setViewVariable('baseLaboratories', DepartmentModel::getInstance()->getBaseLaboratories());
        $this->render([
            'layout' => 'index'
        ]);
    }
}
