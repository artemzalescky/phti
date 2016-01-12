<?php

namespace application\controllers;

use application\models\DepartmentModel;
use ph\controller\BaseController;

// контроллер отдельных лабораторий
class LaboratoryController extends BaseController {

    public function show($laboratoryUrl) {
        $this->setViewVariable('currentLaboratory', DepartmentModel::getInstance()->getBaseLaboratoryByUrl($laboratoryUrl));
        $this->render();
    }
}
