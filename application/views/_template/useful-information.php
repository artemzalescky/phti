<?php use \application\models\DepartmentModel as DepartmentModel; ?>
<?php $ph->include_css('useful-information.css') ?>
<div class="both"></div>
<div class="useful">
    <div style="margin-top: 15px" class="container">
        <div class="col-lg-4 useful-block">
            <div class="useful-info-photo">
                <img class="useful-block-photo" src="resources/images/main/kategoria1.png"/>
            </div>
            <div class="useful-info-title">
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
        </div>

        <div class="col-lg-2 useful-block">
            <div class="useful-info-photo">
                <img class="useful-block-photo" src="resources/images/main/kategoria2.png">
            </div>
            <div class="useful-info-title">
                <h3><?= $ph->lang->Label_News ?></h3>
                <p>
                    <a href="/phti/news"><?= $ph->lang->Label_News ?></a>
                </p>
            </div>
        </div>

        <div class="col-lg-3 useful-block">
            <div class="useful-info-photo">
                <img class="useful-block-photo" src="resources/images/main/kategoria3.png">
            </div>
            <div class="useful-info-title">
                <h3><?= $ph->lang->Label_Schedule ?></h3>
                <p style="color: #033071">
                    Понедельник 08.30 - 17.30 <br>
                    Вторник 08.30 - 17.30 <br>
                    Среда   08.30 - 17.30 <br>
                    Четверг 08.30 - 17.30 <br>
                    Пятница 08:30 — 16:15 <br>
                    Выходные дни: суббота, воскресенье <br>

                    Обеденный перерыв: с 13.00 до 13.45 <br>
                </p>
            </div>
        </div>

        <div class="col-lg-3 useful-block">
            <div class="useful-info-photo">
                <img class="useful-block-photo" src="resources/images/main/kategoria4.png">
            </div>
            <div class="useful-info-title">
                <h3><?= $ph->lang->TopMenu_Contacts ?></h3>
                <ul id="contact-info">
                    <li>
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        <span class="field">Телефон:</span>
                        <br>
                        <?php $ph->link('8 017 267-60-10', '/contacts')
                            ->single_tag('br')
                            ->link('Тел/Факс: (017) 369-76-93', '/contacts')
                        ?>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <span class="field">Email:</span>
                        <br>
                        <?php $ph->link('phti@belhost.by', '/contacts')
                            ->single_tag('br')
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
    </div>
</div>