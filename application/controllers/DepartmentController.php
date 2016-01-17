<?php

namespace application\controllers;

use application\models\DepartmentModel;
use application\models\ProductModel;
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
            $currentDepartmentId = $currentDepartment['id'];
        }

        if (!empty($currentDepartment)) {
            $pathToDepartment = DepartmentModel::getInstance()->getPathToDepartment($currentDepartment);
            DepartmentModel::getInstance()->calculateFullPathUrl($pathToDepartment);

            $products = ProductModel::getInstance()->getByDepartmentId($currentDepartment['id']);
        } else {
            $pathToDepartment = [DepartmentModel::getInstance()->gerRootDepartment()];
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

        $this->setViewVariable('currentDepartment', $currentDepartment);
        $this->setViewVariable('pathToDepartment', $pathToDepartment);
        $this->setViewVariable('departmentList', $childDepartments);
        $this->setViewVariable('products', $products);
        $this->render();
    }
}
