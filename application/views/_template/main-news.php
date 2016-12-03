<?php $ph->include_css('main-news.css') ?>

<br>
<div class="blog-section-grids">

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/marketing.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">На здании Физико-технического института открыта мемориальная доска</h4>
        </div>
        <p>
            <?php
            $ph->cut_text('1 декабря 2016 года на здании Физико-технического института открыта мемориальная доска памяти академика НАН Беларуси Станислава Александровича АСТАПЧИКА − известного ученого-материаловеда, заслуженного деятеля науки
            Республики Беларусь, лауреата Государственной премии СССР в области науки и техники. ', 150)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#LG', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/4.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ НАН Беларуси посетила делегация из компании LG Electronics</h4>
        </div>
        <p>
            <?php
            $ph->cut_text('25 ноября 2016 года Физико-технический институт НАН Беларуси посетила делегация из компании LG Electronics
            во главе с директором Московского технологического центра филиала LG Electronics господином Хен Сан Ву.
             В рамках научных докладов, переговоров и презентаций со стороны ', 165)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#LG', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/5.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ НАН Беларуси посетили представители предприятий г. Калуга</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('21.11.2016 года Физико-технический институт НАН Беларуси посетили представители предприятий г. Калуга (ООО «ЭРГА», ЗАО «ЭКОН», ООО «Энергомаш-Калуга», ООО «НПО «Геоэнергетика» и др. ) и Калужской торгово-промышленной палаты (Россия).
                В рамках научных докладов, переговоров и презентаций со стороны российских партнеров был проявлен интерес к следующим разработкам:', 149)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#kaluga', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>


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
