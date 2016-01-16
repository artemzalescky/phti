<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

class LaboratoryController extends BaseController {

    public function index() {
        $baseLaboratories = DepartmentModel::getInstance()->getBaseLaboratories();

        $this->setViewVariable('baseLaboratories', $baseLaboratories);
        $this->render();
    }

    public function show($laboratoryUrl) {
        $currentLaboratory = DepartmentModel::getInstance()->getBaseLaboratoryByUrl($laboratoryUrl);

        if (empty($currentLaboratory)) {
            $this->redirect('404');
        }

        $this->setViewVariable('currentLaboratory', $currentLaboratory);
        $this->render();
    }
}
