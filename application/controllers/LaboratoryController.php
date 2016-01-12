<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

// ���������� ��������� �����������
class LaboratoryController extends BaseController {

    public function show($laboratoryUrl) {
        $this->setViewVariable('currentLaboratory', DepartmentModel::getInstance()->getBaseLaboratoryByUrl($laboratoryUrl));
        $this->render();
    }
    public function index() {
        $this->setViewVariable('baseLaboratory', DepartmentModel::getInstance()->getBaseLaboratories());
        $this->render();
    }
}
