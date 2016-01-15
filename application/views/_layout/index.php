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
        ->include_css('index.css')

        ->include_css('auther.css')
        ->include_css('title.css')
        ->include_css('logo.css');
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

    <!-- -->

    <div class="container">
        <hr>
        <h2 class="title text-center">
            <?php $ph->link('Руководство ФТИ', '/managment') ?>
        </h2>
    </div>
    <!-- Руководство -->
    <div class="section">
        <div class="container">
             <div class="row">
                <!-- Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <!-- Author Photo -->
                    <div class="author-photo">
                        <?php $ph->image('struct/tomilo_small.jpg')?>
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <!-- Quote -->
                            <p class="quote">
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut."
                            </p>
                            <!-- Author Info -->
                            <cite class="author-info">
                                - Томило Вячеслав Анатольевич,<br> Директор ФТИ НАН Беларуси
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <?php $ph->image('struct/biely_small.jpg')?>
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
                            </p>
                            <cite class="author-info">
                                - Белый Алексей Владимирович,<br>Зам. директора по научной работе
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <?php $ph->image('struct/mihluk_small.jpg')?>
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                            </p>
                            <cite class="author-info">
                                - Михлюк Анатолий Игнатьевич,<br>Зам. директора по научной работе
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Руководство -->

    <!-- -->

    <hr>
    <?php $this->renderTemplate('department')?>
    <hr>
    <?php $this->renderTemplate('laboratory')?>
    <hr>
</div>


<div class="container">
    <h2 class="title text-center">Мы сотрудничаем </h2>
</div>

<section class="section section--medium">
    <div class="container">
        <ul class="logo-bar">
            <li>
                <?php $ph->image('logo/140.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/558.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/2566.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/agat.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/agat-electro.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/agat-system.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/alevkurp.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/atomtex.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/beltech.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/bsvt.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/peleng.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/volat.png', ['style' => 'height="52px; width="140px'])?>
            </li>
        </ul>
    </div>
</section>
<br>


<div class="container">
    <hr>
    <h2 class="title text-center"> Местоположение </h2>
</div>
<div style="width: 100%; height: 370px;outline: 0; border: 0;" id="map">

    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DAdsbfJghUyx8ZFu4-cRWa5of7IlvN9Y&width=100%&height=370&lang=ru_RU&sourceType=constructor"></script>
</div>

<?php $this->renderTemplate('footer') ?>

</body>
</html>