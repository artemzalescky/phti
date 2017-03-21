<?php
$ph
    /*Index*/
    ->include_css('index.css')
    ->include_css('main-news.css')
    /* Infinite Slider */
    ->include_js_lib('ph-infinite-slider.js')
    ->include_css('lib/ph-infinite-slider.css')
    /* forma */
    ->include_system_js_lib('validator.min.js')
    ->include_system_js_lib('form-scripts.js')
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
        margin-top: -65px;
        border-bottom-left-radius: 500px 60px;
        border-bottom-right-radius: 500px 60px;
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

<div class="news-science-container" >
    <br><br><br>
    <div class="container" >
        <h2 class="title text-center title-news">
            <?php $ph->link( $ph->lang->Label_Competition, '/') ?>
        </h2>
        <h3 class="title text-center title-news-description"> Внутренние конкурсы ФТИ </h3>
        <?php $this->renderTemplate('science-news')?>
    </div>
    <br>
    <h2 class="title text-center title-news"><?= $ph->lang->Label_Cooperate_Science ?> </h2>
    <h3 class="title text-center title-news-description"> ФТИ НАН Беларуси сотрудничает со следующими институтами </h3>
    <?php $this->renderTemplate('logotip-university') ?>
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



    <h2 class="title text-center" style="margin-left: 0px">
        <?php $ph->link( $ph->lang->Label_International_Project , '/') ?>
    </h2>
    <div class="ph-infinite-slider science">
        <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
            <div class="title">Разработка месторождений нефти на Урале</div>
            <div class="preview-title">Разработка месторождений нефти на Урале</div>
            <div class="description">
                Должность: Директор ФТИ НАН Беларуси<br>
                Время приема: среда 16.00-17.30<br>
                Номер кабинета: каб. 301<br>
                Номер телефона: тел. 267-60-10<br>
                e-mail: V.Zalesski@mail.ru
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
            <div class="title">Белый Алексей Владимирович</div>
            <div class="preview-title">Белый Алексей Владимирович</div>
            <div class="description">
                Должность: Заместитель директора по научной работе<br>
                Время приема: четверг 16.00-17.30<br>
                Номер кабинета: каб. 317<br>
                Номер телефона: тел. 265-07-98
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
            <div class="title">Михлюк Анатолий Игнатьевич</div>
            <div class="preview-title">Михлюк Анатолий Игнатьевич</div>
            <div class="description">
                Должность: Заместитель директора по научной и инновационной работе<br>
                Время приема: понедельник 16.00-17.30<br>
                Номер кабинета: каб. 325<br>
                Номер телефона: тел. 267-42-75
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
            <div class="title">Поваров Олег Евгеньевич</div>
            <div class="preview-title">Поваров Олег Евгеньевич</div>
            <div class="description">
                Должность: Зам. директора по общим вопросам<br>
                Номер кабинета: 303 к. 2<br>
                Номер телефона: 8029 6836474
            </div>
        </div>
        <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
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
        $('.ph-infinite-slider.science').ph_infinite_slider({
            imgHeight: 260,
            imgWidth: 260,
            padding: 70,
            roundImages: true,
            previewTitleHeight: 55
        });
    });
</script>

