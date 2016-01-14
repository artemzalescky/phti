<!DOCTYPE html>
<html>
<head>
    <title> Физико-Технический Институт НАН Беларуси </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        $ph->include_system_css('/themes/flatly-bootstrap.min.css')
        ->include_system_css('glyphicon.css')
        ->include_system_js_lib('jquery-2.1.4.min.js')
        ->include_system_js_lib('bootstrap-3.3.5-dist/bootstrap.min.js')

        /*Header*/
        ->include_css('header/header.css')

        /*Footer*/
        ->include_css('footer/footer.css')

        /*Index*/
        ->include_css('index.css');
    ?>
</head>

<body>

<?php $this->renderTemplate('header') ?>
<div class="container">

    <hr>

    <div id="phti-description" class="jumbotron">
        <h2>Физико-Технический Институт</h2>
        <hr>
        <p>
            Деятельность ФТИ сегодня является примером реализации связи науки с производством. <br>
            <br>
            Основные направления фундаментальных и прикладных исследований института на современном этапе: <br>
            &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-check phti-description-list-icon"></span>&nbsp; Физика прочности и пластичности <br>
            &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-check phti-description-list-icon"></span>&nbsp; Теория и методы создания многофункциональных и специальных металлических и керамических материалов <br>
            &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-check phti-description-list-icon"></span>&nbsp; Разработка теоретических основ технологических процессов получения и обработки материалов с использованием высоких давлений, высокоэнергетического воздействия – лазерного, плазменного, электронно- и ионно-лучевого. <br>
            &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-check phti-description-list-icon"></span>&nbsp; Разработке и организация производства отечественных беспилотных летательных аппаратов. <br>
            <br>
            Многие созданные в ФТИ высокоэффективные ресурсо- и энергосберегающие технологии, оборудование и материалы освоены промышленностью Республики Беларусь и других стран. <br>
        </p>
        <hr>
        <p>
            <?php $ph->link('Подробнее о ФТИ', '/about', ['class' => 'btn btn-primary btn-lg']) ?>
        </p>
    </div>

    <hr>
    <?php $this->renderTemplate('department')?>
    <hr>
    <?php $this->renderTemplate('laboratory')?>
    <hr>
</div>

<div style="width: 100%; height: 420px;outline: 0; border: 0;" id="map">
    <h2 class="title text-center">Местоположение</h2>
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DAdsbfJghUyx8ZFu4-cRWa5of7IlvN9Y&width=100%&height=370&lang=ru_RU&sourceType=constructor"></script>
</div>

<?php $this->renderTemplate('footer') ?>

</body>
</html>