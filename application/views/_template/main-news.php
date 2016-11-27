<?php $ph->include_css('main-news.css') ?>

<br>
<div class="blog-section-grids">

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/konference.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">22-25 ноября 2016 года Международная научная конференция</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('22-25 ноября 2016 года в ГО "НПЦ НАН Беларуси по материаловедению" по адресу г. Минск,
				ул. П. Бровки, 19 состоятся  2 конференции - VII Международная научная конференция', 149)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('delegacija', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>



    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/1.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ посетила делагация</h4>
        </div>
        <p>
            <?php
            $ph->cut_text('С 8 по 12 ноября 2016г Физико-технический институт посетила делегация Института
                 исследования металлов Китайской Академии наук (Institute of Metal Research, Chinese Academy of
                 Sciences (IMR CAS)) из г.Шеньян (Shenyang).
                Тематика нашего сотрудничества относится к области пластической деформации металлов и посвящена
                экспериментам и моделированию процессов пластической деформации и структурообразования при гидроударной
                штамповке (hydroforming) различных деталей из листовых и трубчатых заготовок, а также научным и
                 практическим аспектам поперечно-клиновой прокатки.', 165)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#Delegation-From-China', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>


    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/3.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Международная научно-техническая конференция</h4>
        </div>
        <p>
            <?php
            $ph->cut_text('14-16 сентября 2016 в Институте состоялась XI Международная научно-техническая конференция «Современные методы и технологии создания и обработки материалов»', 165)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#International-Scientific-and-Technical-Conference', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>

</div>
