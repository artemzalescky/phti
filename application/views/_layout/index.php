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
        ->include_css('logo.css')

        /*slider*/

        ->include_css('slider/flexslider.css')
        ->include_css('slider/slider.css')

        ->include_system_js_lib('slider/jquery.easing.1.3.js')
        ->include_system_js_lib('slider/jquery.fancybox.pack.js')
        ->include_system_js_lib('slider/jquery.fancybox-media.js')
        ->include_system_js_lib('slider/jquery.flexslider.js')
        ->include_system_js_lib('slider/animate.js')
        ->include_system_js_lib('slider/custom.js')

        /* Infinite Slider */
        ->include_js_lib('ph-infinite-slider.js')
        ->include_css('lib/ph-infinite-slider.css')

    ?>
    <style></style>
</head>

<body>

<?php $this->renderTemplate('header') ?>

<section id="featured">
    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="flexslider">
                    <ul class="slides">

                  <!--      <li>
                            <?php// $ph->image('slider/2.jpg')?>
                            <div class="flex-caption">
                                <h3 style="margin-top: -10px"><?//=$ph->lang->Slider_Second_Name ?></h3>
                                <p><?//=$ph->lang->Slider_Second_Description ?></p>
                                <?php// $ph->link($ph->lang->Slider_Learn_More, '/managment',['class' => 'btn btn2 btn-theme']) ?>
                            </div>
                        </li> -->
                        <li>
                            <?php $ph->image('slider/3.jpg')?>
                            <div class="flex-caption">
                                <h3> <h3><?=$ph->lang->Slider_Third_Name ?></h3></h3>
                                <p><?=$ph->lang->Slider_Third_Description ?></p>
                                <?php $ph->link($ph->lang->Slider_Learn_More, '/main_directions',['class' => 'btn btn2 btn-theme']) ?>
                            </div>
                        </li>
                        <li>
                            <?php $ph->image('slider/1.jpg')?>
                            <div class="flex-caption">
                                <h3><?=$ph->lang->Slider_First_Name ?></h3>
                                <p><?=$ph->lang->Slider_First_Description ?></p>
                                <?php $ph->link($ph->lang->Slider_Learn_More, '/contacts',['class' => 'btn btn2 btn-theme']) ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
</section>


<div class="container" >
    <h2 class="title text-left" style="margin-top: 25px;">
        <?php $ph->link( $ph->lang->Label_News , '/news') ?>
    <hr style="margin-bottom: -10px; margin-top: 5px">

</div>

<div style="display: block; position: relative; width: 100%; background-color: #fafafa">
    <div class="container" style="background-color: #fafafa">
        <?php $this->renderTemplate('main-news')?>
        <br>
    </div>
    <br>
</div>

<div class="container">
    <br>
    <h2 class="title text-left" > <?= $ph->lang->Label_About_US ?> </h2>
    <hr style="margin-bottom: 5px; margin-top: -10px">
    <?php $this->renderTemplate('about-us')?>
</div>



<div class="container">

  <!--  <hr> -->
    <?php //$this->renderTemplate('department')?>
  <!--  <hr> -->
    <?php //$this->renderTemplate('laboratory')?>
</div>


<div class="container">
    <br>
    <h2 class="title text-left" style="margin-left: 0px"><?php $ph->link( $ph->lang->Label_Managment , '/managment') ?></h2>
    <hr style="margin-bottom: 5px; margin-top: -5px">
    <div class="ph-infinite-slider management">
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/zalescky.jpg') ?>">
            <div class="title">Залесский Виталий Геннадьевич</div>
            <div class="description">
                Должность: Директор ФТИ НАН Беларуси<br>
                Время приема: среда 16.00-17.30<br>
                Номер кабинета: каб. 301<br>
                Номер телефона: тел. 267-60-10<br>
                e-mail: V.Zalesski@mail.ru
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/biely.jpg') ?>">
            <div class="title">Белый Алексей Владимирович</div>
            <div class="description">
                Должность: Заместитель директора по научной работе<br>
                Время приема: четверг 16.00-17.30<br>
                Номер кабинета: каб. 317<br>
                Номер телефона: тел. 265-07-98
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/mihluk.jpg') ?>">
            <div class="title">Михлюк Анатолий Игнатьевич</div>
            <div class="description">
                Должность: Заместитель директора по научной и инновационной работе<br>
                Время приема: понедельник 16.00-17.30<br>
                Номер кабинета: каб. 325<br>
                Номер телефона: тел. 267-42-75
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/povarov.jpg') ?>">
            <div class="title">Поваров Олег Евгеньевич</div>
            <div class="description">
                Должность: Зам. директора по общим вопросам<br>
                Номер кабинета: 303 к. 2<br>
                Номер телефона: 8029 6836474
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/Poko_mini.jpg') ?>">
            <div class="title">Поко Ольга Александровна</div>
            <div class="description">
                Должность: Ученый секретарь<br>
                Номер телефона: 267-64-53<br>
                Номер мобильного телефона: 8-0296-19-60-15
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.management').ph_infinite_slider({
            imgHeight: 200,
            imgWidth: 200,
            padding: 15,
            roundImages: true
        });
    });
</script>

<!-- Продукция -->
<!--
<div class="container" >
    <hr>
    <h2 class="title text-center">
        <?php// $ph->link( $ph->lang->Label_Production , '/product') ?>
    </h2>
    <hr>
    <?php// $this->renderTemplate('main-product')?>
    <br>

</div>
<hr>
-->

<br>
<div class="container">
    <h2 class="title text-left"><?= $ph->lang->Label_Certificate ?> </h2>
    <hr style="margin-bottom: 5px; margin-top: -5px">
    <div class="ph-infinite-slider certificate">
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/1.jpg') ?>">
            <div class="title">Аттестат Аккредитации</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/2.jpg') ?>">
            <div class="title">Аттестат Аккредитации</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/3.jpg') ?>">
            <div class="title">Сертификат Продукции Собственного Производства</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/4.jpg') ?>">
            <div class="title">Сертификат о Соответствии</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/5.jpg') ?>">
            <div class="title">Специальное Разрешение</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/6.jpg') ?>">
            <div class="title">Специальное Разрешение</div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('attestat/7.jpg') ?>">
            <div class="title">Специальное Разрешение</div>
        </div>
    </div>
    <hr>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.certificate').ph_infinite_slider({
            imgHeight: 289,
            imgWidth: 200,
            padding: 15
        });
    });
</script>

<div class="container">

    <h2 class="title text-center"><?= $ph->lang->Label_Cooperate ?> </h2>
    <hr>
</div>
<section class="section section--medium">
    <div class="container">
        <ul class="logo-bar">
            <li>
                <?php $ph->image('logo/auto-gidro.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/baz.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/bza.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/integral.png', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('logo/maz.png', ['style' => 'height="52px; width="140px'])?>
            </li>
			<li>
                <?php $ph->image('logo/mmz.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
			<li>
                <?php $ph->image('logo/mtz.png', ['style' => 'height="52px; width="140px'])?>
            </li>
        </ul>
    </div>
</section>
<br>


<div class="container">
    <hr>
    <h2 class="title text-center"> <?= $ph->lang->Label_Location ?> </h2>
</div>
<div style="width: 100%; height: 370px;outline: 0; border: 0;" id="map">

    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DAdsbfJghUyx8ZFu4-cRWa5of7IlvN9Y&width=100%&height=370&lang=ru_RU&sourceType=constructor"></script>
</div>

<?php $this->renderTemplate('footer') ?>

</body>
</html>