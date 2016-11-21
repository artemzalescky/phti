<?php use \application\models\DepartmentModel as DepartmentModel; ?>

<div id="footer" class="navbar-default">
    <div class="container">
        <div class="progress progress-striped active" style="margin-bottom: 0">
            <div class="progress-bar progress-bar-success" style="width: 100%"></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3><?= $ph->lang->Label_Departments ?></h3>
                <p>
                    <?php
                        // чтобы не создавать отдельные контроллеры для статических страниц, где будут получаться департаменты,
                        // будем проверять здесь их наличие. Если их нет - тянем из базы
                        if (empty($mainDepartments)) {
                            $mainDepartments = DepartmentModel::getInstance()->getMainDepartments();
                        }
                        foreach($mainDepartments as $mainDepartment){
                             $ph->link($ph->localisedField($mainDepartment, 'name'), "/department/{$mainDepartment['url']}")
                                ->single_tag('br');
                        }
                    ?>
                </p>
            </div>
            <div class="col-md-2">
                <h3> <?= $ph->lang->Label_News ?> </li></h3>
                
                <p>
                    <?php $ph->link('Все новости', '/news') ?>
                </p>
            </div>
            <div class="col-md-3">
                <h3> <?=$ph->lang->Label_Schedule ?></h3>
                Понедельник 08.30 - 17.30 <br>
                Вторник 08.30 - 17.30 <br>
                Среда   08.30 - 17.30 <br>
                Четверг 08.30 - 17.30 <br>
                Пятница 08:30 — 16:15 <br>
                Выходные дни: суббота, воскресенье <br>

                Обеденный перерыв: с 13.00 до 13.45 <br>
            </div>
            <div class="col-md-3">
                <h3><?=$ph->lang->TopMenu_Contacts?></h3>
                <ul id="contact-info">
                    <li>
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        <span class="field">Телефон:</span>
                        <br>
                        <?php $ph->link('8 017 267-60-10', '/contacts')
                            ->single_tag('br')
                            ->link('8 017 267 42 75', '/contacts')
                            ->single_tag('br')
                            ->link('Факс: (017) 369-76-93', '/contacts')
                            ->single_tag('br')
                            ->link('Факс: (017) 267-42-75', '/contacts')
                        ?>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <span class="field">Email:</span>
                        <br>
                        <?php $ph->link('phti@belhost.by', '/contacts')
                                 ->single_tag('br')
                                 ->link('market_phti@belhost.by', '/contacts')
                        ?>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-home"></span>
                        <span class="field">Адрес:</span>
                        <br>
                        <?php $ph->link('г. Минск, ул. Купревича 10', '/contacts') ?>
                    </li>
                </ul>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <p class="copyright">
                    Copyright © 2016 &nbsp; phti.by. &nbsp; All Rights Reserved.
                </p>
            </div>
        </div>
        <hr style="border-color: rgb(28, 216, 179)">
    </div>
</div>