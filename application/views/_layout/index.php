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
        ->include_css('main-news.css')

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
        /* forma */
        ->include_system_js_lib('validator.min.js')
        ->include_system_js_lib('form-scripts.js')
    ?>
    <style></style>
</head>

<body>

<?php $this->renderTemplate('header') ?>
<?php $this->renderTemplate('slider-menu') ?>

<style>
    .news-logo-container{
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #f9f9f9;
        margin-top: -40px;
        border-bottom-left-radius: 400px 50px;
        border-bottom-right-radius: 400px 50px;
    }
    .title-news {
        color: #033071 !important;
        font-family: 'Roboto', sans-serif !important;
        font-size: 14pt !important;
        font-weight: 800 !important;
    }
    .title-news-description{
        margin-top: -5px;
        margin-bottom: 10px;
        font-family: 'Roboto', sans-serif;
        color: #303030;
        font-size: 0.85em;
        font-weight: 200;
    }

</style>

<div class="news-logo-container" >
    <br><br><br>
    <div class="container" >
        <h2 class="title text-center title-news">
            <?php $ph->link( $ph->lang->Label_News , '/news') ?>
        </h2>
        <h3 class="title text-center title-news-description"> Самые актуальные новости деятельности ФТИ </h3>
        <?php $this->renderTemplate('main-news')?>
    </div>
    <br>
    <div class="container" >
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Cooperate ?> </h2>
        <h3 class="title text-center title-news-description"> Наши партнеры сегодня </h3>
        <br>
        <?php $this->renderTemplate('logotip') ?>
    </div>
    <br><br>

</div>
<br>
<div class="container">
    <h2 class="title text-center" style="margin-left: 0px">
        <?php $ph->link( $ph->lang->Label_Managment , '/managment') ?>
    </h2>
    <div class="ph-infinite-slider management">
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/zalescky.jpg') ?>">
            <div class="title">Залесский Виталий Геннадьевич</div>
            <div class="preview-title">Залесский Виталий Геннадьевич</div>
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
            <div class="preview-title">Белый Алексей Владимирович</div>
            <div class="description">
                Должность: Заместитель директора по научной работе<br>
                Время приема: четверг 16.00-17.30<br>
                Номер кабинета: каб. 317<br>
                Номер телефона: тел. 265-07-98
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/mihluk.jpg') ?>">
            <div class="title">Михлюк Анатолий Игнатьевич</div>
            <div class="preview-title">Михлюк Анатолий Игнатьевич</div>
            <div class="description">
                Должность: Заместитель директора по научной и инновационной работе<br>
                Время приема: понедельник 16.00-17.30<br>
                Номер кабинета: каб. 325<br>
                Номер телефона: тел. 267-42-75
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/povarov.jpg') ?>">
            <div class="title">Поваров Олег Евгеньевич</div>
            <div class="preview-title">Поваров Олег Евгеньевич</div>
            <div class="description">
                Должность: Зам. директора по общим вопросам<br>
                Номер кабинета: 303 к. 2<br>
                Номер телефона: 8029 6836474
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('struct/Poko_mini.jpg') ?>">
            <div class="title">Поко Ольга Александровна</div>
            <div class="preview-title">Поко Ольга Александровна</div>
            <div class="description">
                Должность: Ученый секретарь<br>
                Номер телефона: 267-64-53<br>
                Номер мобильного телефона: 8-0296-19-60-15
            </div>
        </div>
    </div>
</div>
<br><br>
<?php //$this->renderTemplate('callBack') ?>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.management').ph_infinite_slider({
            imgHeight: 200,
            imgWidth: 200,
            padding: 15,
            roundImages: true,
            previewTitleHeight: 55
        });
    });
</script>

<style>
    .attestat-useful-information-container{
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #f9f9f9;
    }
</style>


<br>
<div class="attestat-useful-information-container">
    <div class="container">
        <br>
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Certificate ?> </h2>
        <h3 class="title text-center title-news-description"> АТТЕСТАТЫ АККРЕДИТАЦИИ, СЕРТИФИКАТЫ, ЛИЦЕНЗИИ </h3>
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
    <div class="container">
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Useful_Information ?> </h2>
    <?php $this->renderTemplate('useful-information') ?>
    </div>
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

<?php $this->renderTemplate('pozdravlenie') ?>

<div style="background-color: #f9f9f9">
    <div class="container">
        <br><br>
        <h2 class="title text-center title-news"> <?= $ph->lang->Label_Location ?> </h2>
        <h3 class="title text-center title-news-description"> г.Минск ул.Купревича 10 </h3>
    </div>
    <div style="width: 100%; height: 270px;outline: 0; border: 0;" id="map">
        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DAdsbfJghUyx8ZFu4-cRWa5of7IlvN9Y&width=100%&height=270&lang=ru_RU&sourceType=constructor"></script>
    </div>

    <?php $this->renderTemplate('forma') ?>

    <br>
</div>
<?php $this->renderTemplate('footer') ?>

</body>



</html>