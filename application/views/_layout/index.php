<!DOCTYPE html>
<html>
<head>
    <title> Физико-Технический Институт НАН Беларуси </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="FnWScgRAEl5rRwf0QXoUuoYDUBrglKx85MlyO4sf0i4" />
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
    ?>
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
        margin-top: -130px;
        border-bottom-left-radius: 1500px 300px;
        border-bottom-right-radius: 1500px 300px;
    }
    .title-news {
        color: #033071 !important;
        font-family: 'Roboto', sans-serif !important;
        font-size: 14pt !important;
        font-weight: 800 !important;
    }
    .title-news-description{
        margin-top: -10px;
        margin-bottom: 15px;
        font-family: 'Roboto', sans-serif;
        color: #303030;
        font-size: 0.85em;
        font-weight: 200;
        font-weight: bold;
        text-transform: uppercase;

    }

</style>

<div class="news-logo-container" >
    <br><br><br><br><br><br><br>
    <div class="container" >
        <h2 class="title text-center title-news">
            <?php $ph->link( $ph->lang->Label_News , '/news') ?>
        </h2>
        <!-- <h3 class="title text-center title-news-description"> Самые актуальные новости деятельности ФТИ </h3> -->
        <?php //$this->renderTemplate('main-news')?>
    </div>
    <br>
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Cooperate ?> </h2>
        <!--<h3 class="title text-center title-news-description"> Наши партнеры сегодня </h3> -->
        <?php $this->renderTemplate('logotip') ?>
    <br><br><br><br><br><br><br><br>
</div>

<br>
<div class="container">
    <h2 class="title text-center" style="margin-left: 0px">
        <?php $ph->link( $ph->lang->Label_Managment , '/managment') ?>
    </h2>
    <?php $this->renderTemplate('rucovodstvo-phti') ?>
</div>
<br><br><br>
<div class="attestat-useful-information-container">
    <div class="container">
        <br>
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Certificate ?> </h2>
        <!-- <h3 class="title text-center title-news-description"> Аттестаты, аккредитации, сертификаты, лицензии </h3> -->
        <?php $this->renderTemplate('attestats') ?>
    </div>
    <br><br>
    <div class="container">
        <h2 class="title text-center title-news"><?= $ph->lang->Label_Useful_Information ?> </h2>
    <?php $this->renderTemplate('useful-information') ?>
    </div>
</div>

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