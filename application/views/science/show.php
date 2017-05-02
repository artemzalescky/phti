<?php
    /*Index*/
    $ph->include_css('index.css')
    ->include_css('main-news.css')
    ->include_css('science_index.css')

    ->include_system_js_lib('slider/jquery.easing.1.3.js')
    /* Infinite Slider */
    ->include_js_lib('ph-infinite-slider.js')
    ->include_css('lib/ph-infinite-slider.css')
    /* forma */
    ->include_system_js_lib('validator.min.js')
?>

<br>

<?php $this->renderTemplate('slider-science'); ?>

<style>
    .news-science-container{
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #f9f9f9;
        margin-top: -150px;
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
        margin-bottom: 10px;
        font-family: 'Roboto', sans-serif;
        color: #303030;
        font-size: 0.85em;
        font-weight: 200;
        font-weight: bold;
        text-transform: uppercase;
    }

</style>

<div class="news-science-container" >
    <br><br><br><br><br><br><br><br>
    <div class="container" >
        <h2 class="title text-center title-news">
            <?php $ph->link( $ph->lang->Label_Competition, '/') ?>
        </h2>
        <h3 class="title text-center title-news-description"> Внутренние конкурсы ФТИ </h3>
        <?php $this->renderTemplate('science-news')?>
    </div>
    <br>
    <h2 class="title text-center title-news"><?= $ph->lang->Label_Cooperate_Science ?> </h2>
    <h3 class="title text-center title-news-description"> ФТИ НАН Беларуси сотрудничает со следующими институтами: </h3>
    <?php $this->renderTemplate('logotip-university') ?>
    <br><br><br><br><br>
    <br><br>
</div>



<br>
<div class="container">


    <h2 class="title text-center" style="margin-left: 0px">
        <?php $ph->link( $ph->lang->Label_Conference , '/') ?>
    </h2>
    <h3 class="title text-center title-news-description"> Самая актуальная информация о предстоящей конференции<br>
    итоги предстоящихконференций<br>ссылки</h3>

    <style>
        .conference {
            display: block;
            position: relative;
            font-size: 1.1em;
            height: 220px;
            margin-left: 20px;
            text-align: center;
        }
    </style>
    <div class="conference">
        <p style="megin-top: 30px;">
            <?=$ph->lang->Conference_Text ?>
        </p>

    </div>

    <div class="container">
        <h2 class="title text-center title-news"><?= $ph->lang->Label_PHTI_GOS_Programs ?> </h2>
        <h3 class="title text-center title-news-description"> Государственная программа научных исследований «Физическое материаловедение, новые материалы и технологии» (2016–2020 гг.) </h3>
        <?php $this->renderTemplate('gos_programs') ?>
    </div>
</div>
<br><br>
<?php //$this->renderTemplate('callBack') ?>

<div class="container_publication_and_monogram">
    <div class="container">
    <br>
    <h2 class="title text-center" style="margin-left: 0px">
        <?php $ph->link( $ph->lang->Label_Publication_Monogram , '/') ?>
    </h2>
    <h3 class="title text-center title-news-description"> Скачать самое актуальное на сайте </h3>
    <?php $this->renderTemplate('publication'); ?>


</div>


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





