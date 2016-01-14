<div id="divFooter" class="footerArea">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Научные центры и отделы</h3>
                <p>
                    <?php
                        foreach($departmentList as $list){
                            $ph->link($list['nameRu'], '/department/$list["url"]')->single_tag('br');
                        }
                    ?>
                </p>
<!--                <h3>Лаборатории</h3>-->
<!--                <p>-->
<!--                    --><?php
//                    foreach($baseLaboratory as $baseList){
//                        $ph->link($baseList['nameRu'], '/department/$baseList["url"]')->single_tag('br');
//                    }
//                    ?>
<!--                </p>-->


            </div>
            <div class="col-md-2">
                <h3>Новости</h3>
                <p>
                    <?php $ph->link('Мобильная версия сайта', '/news') ?>
                    <br>
                    <span style="text-transform:none;">20.01.2016 </span>
                </p>
                <p>
                    <?php $ph->link('Новый дизайн сайта', '/news') ?>
                    <br>
                    <span style="text-transform:none;">15.01.2016 </span>
                </p>
                <p>
                    <?php $ph->link('Запуск сайта', '/news') ?><br>
                    <span style="text-transform:none;">09.01.2016 </span>
                </p>
                <p>
                    <?php $ph->link('Все новости', '/news') ?>
                </p>
            </div>
            <div class="col-md-3">
                <h3>График работы</h3>
                Понедельник 08.30 - 17.30 <br>
                Вторник 08.30 - 17.30 <br>
                Среда   08.30 - 17.30 <br>
                Четверг 08.30 - 17.30 <br>
                Пятница 08:30 — 16:15 <br>
                Выходные дни: суббота, воскресенье <br>

                Обеденный перерыв: с 13.00 до 13.45 <br>
            </div>
            <div class="col-md-3">
                <h3>Контакты</h3>
                <ul id="contact-info">
                    <li>
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        <span class="field">Телефон:</span>
                        <br>
                        <?php $ph->link('8 017 267-60-10', '/contacts')
                            ->single_tag('br')
                            ->link('8 017 267 42 75', '/contacts')
                            ->single_tag('br')
                            ->link('Факс: (017) 263-76-93', '/contacts')
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
    </div>
</div>