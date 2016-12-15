<?php $ph->include_css('main-news.css') ?>

<br>
<div class="blog-section-grids">

   <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/visit_muni_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ НАН Беларуси посетил руководитель компании MDT </h4>
        </div>
        <p>
            <?php
            $ph->cut_text('1-2 декабря 2016 года ФТИ НАН Беларуси посетил руководитель компании MDT (Республика Корея) Moon Hee Lee. В рамках визита проведены презентации научных разработок ГНПО «Научно-практический центр НАН Беларуси по материаловедению», 
                   ГНУ «Институт порошковой металлургии» и ФТИ НАН Беларуси. Особый интерес у г-на Moon Hee Lee вызвали технологии магнитоимпульсной штамповки и получения электроизоляционной керамики. Проведены переговоры о возможном сотрудничестве по эти двум направлениям. ', 150)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#muni', ['class' => 'btn btn-default'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>
    
    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/100idej_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Участие ФТИ в молодежном проекте «100 идей для Беларуси»</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('24 ноября в РИУП «Научно-технологический парк БНТУ «Политехник» проходил отборочный тур конкурса молодежных инновационных проектов «100 идей для Беларуси» по г.Минску. <br>
                   Проект Глушакова А.Н «Новая экономно-легированная сталь для зубчатых колес коробки передач автотракторной техники» принял участие в отборочный туре и получил путевку в финал который состоится в начале февраля 2017 года.', 149)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#100idej', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div>
    
      <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/bc_forum_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Cостоялся Белорусско-Китайский молодежный инновационный форум</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('29-30 ноября 2016 года в г. Минск на базе Белорусского национального технического университета состоялся Белорусско-Китайский молодежный инновационный форум «Новые горизонты – 2016».
                    Форум проходил одновременно в Белорусском национальном техническом университете и Северо-Восточном университете (Шэньян, Китай).', 149)
                ->text('...');
            ?>
        </p>
        <?php
        $ph->link_open('news#bc_forum', ['class' => 'btn btn-default','style' => 'target="_blank'])
            ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            ->text(' Подробнее')
            ->link_close('a');
        ?>
    </div> 
     
      

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
