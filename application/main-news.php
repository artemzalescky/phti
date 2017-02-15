<?php $ph->include_css('main-news.css') ?>

<br>
<div class="blog-section-grids">

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/orsha-mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ участвует в модернизации промышленных предприятий</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('Многоплановость научных направлений в деятельности института позволяет решать ряд сложных комплексных научно-технических задач по модернизации', 155)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#modern', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>


    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/seminar2_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center"> в Физико-техническом институте прошел семинар</h4>
        </div>
        <p>
            <?php
            $ph->cut_text('01.02.2017 года в Физико-техническом институте прошел семинар, посвященный теме «Перспективы использования аустенито-бейнитного чугуна (ADI) в Беларуси», инициатором и докладчиком, которого выступал (к.т.н.) Покровский А.И.', 150)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#sem2', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>


    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/day-knoladge.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Физико-технический институт отметил День науки</h4>
        </div>

        <p>
            <?php
            $ph->cut_text(' 27 января Физико-технический институт отметил День науки. За многолетний и добросовестный труд, развитие новых направлений исследований, внедрение разработок в производство были отмечены почетными грамотами и словами благодарности ведущие и молодые ученые института: ', 170)
                ->text('...');
            ?>
            <br>
        </p>
        <?php
        $ph->link_open('news#day', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>

  <!--  <div class="col-md-4 blog-section-grid">
        <?php //$ph->image("news/main_news/23.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">В малом актовом зале ФТИ состоится семинар</h4>
        </div>

        <p>
            <?php
           // $ph->cut_text('1 февраля в 14.00 в малом актовом зале ФТИ (комн 303) состоится семинар на тему: <strong>"Перспективы использования аустенито-бейнитного чугуна (ADI) в Беларуси "</strong>', 149)
            //    ->text('...');
            ?>
        </p>
        <?php
        //$ph->link_open('news#seminar_fti', ['class' => 'btn btn-default','style' => 'target="_blank'])
        //    ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
        //    ->text(' Подробнее')
        //    ->link_close('a');
        ?>
    </div>

   -->


   


<!--
    <div class="col-md-4 blog-section-grid">
        <?php //$ph->image("news/main_news/4.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ НАН Беларуси посетила делегация из компании LG Electronics</h4>
        </div>
        <p>
            <?php
            //$ph->cut_text('25 ноября 2016 года Физико-технический институт НАН Беларуси посетила делегация из компании LG Electronics
            //во главе с директором Московского технологического центра филиала LG Electronics господином Хен Сан Ву.
            // В рамках научных докладов, переговоров и презентаций со стороны ', 165)
             //   ->text('...');
            ?>
        </p>
        <?php
       // $ph->link_open('news#LG', ['class' => 'btn btn-default'])
       //     ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
       //     ->text(' Подробнее')
       //     ->link_close('a');
        ?>
    </div>

   -->


<!--
    <div class="col-md-4 blog-section-grid">
        <?php //$ph->image("news/main_news/1.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ посетила делагация</h4>
        </div>
        <p>
            <?php
            //$ph->cut_text('С 8 по 12 ноября 2016г Физико-технический институт посетила делегация Института
            //    исследования металлов Китайской Академии наук (Institute of Metal Research, Chinese Academy of
            //     Sciences (IMR CAS)) из г.Шеньян (Shenyang).
            //    Тематика нашего сотрудничества относится к области пластической деформации металлов и посвящена
            //    экспериментам и моделированию процессов пластической деформации и структурообразования при гидроударной
            //    штамповке (hydroforming) различных деталей из листовых и трубчатых заготовок, а также научным и
            //     практическим аспектам поперечно-клиновой прокатки.', 165)
            //    ->text('...');
            ?>
        </p>
        <?php
        //$ph->link_open('news#Delegation-From-China', ['class' => 'btn btn-default'])
        //    ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
        //    ->text(' Подробнее')
        //    ->link_close('a');
        ?>
    </div>

-->


</div>
