<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class DepartmentController extends BaseController {

    public function show($departmentUrlList) {
        $currentDepartment = null;

        if (empty($departmentUrlList)){
            $currentDepartmentId = 0;
        } else {
            $departmentUrl = $departmentUrlList[count($departmentUrlList) - 1];
            $currentDepartment = DepartmentModel::getInstance()->getDepartmentByUrl($departmentUrl);
            if (empty($currentDepartment)) {
                $this->redirect('404');
            }
            $this->setViewVariable('currentDepartment', $currentDepartment);
            $currentDepartmentId = $currentDepartment['id'];
        }

        $childDepartments = DepartmentModel::getInstance()->getDepartmentChildren($currentDepartmentId);
        DepartmentModel::getInstance()->calculateChildrenFullUrl($currentDepartment, $childDepartments);
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
        $this->render();
    }
}
