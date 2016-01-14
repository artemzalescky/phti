<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

// ���������� ��� ������� � ������� + �������� �����������
class DepartmentController extends BaseController {

    public function show($departmentUrlList) {

        $this->setViewVariable('url', $departmentUrlList);

        if (empty($departmentUrlList)){
            $parentId = 0;
        } else {
            $departmentUrl = $departmentUrlList[count($departmentUrlList) - 1];
            $department = DepartmentModel::getInstance()->getDepartmentByUrl($departmentUrl);
            if (empty($department)) {
                $this->redirect('404');
            }
            $parentId = $department['id'];
        }

        $departmentList = DepartmentModel::getInstance()->getDepartmentChildren($parentId);
        if (!empty($departmentList)) {
            for ($i = 0; $i < count($departmentList); $i++) {
                $children = DepartmentModel::getInstance()->getDepartmentChildren($departmentList[$i]['id']);
                if (!empty($children)) {
                    $departmentList[$i]['children'] = $children;
                }
            }
        }

        $this->setViewVariable('departmentList', $departmentList);
        $this->render();
    }
}