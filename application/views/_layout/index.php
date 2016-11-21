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
    <h2 class="title text-center" style="margin-top: 25px;">
        <?php $ph->link( $ph->lang->Label_News , '/news') ?>
    </h2>
    <hr>
</div>

<div class="main_news"  style="margin-top: -15px">
    <div class="container">
        <?php $this->renderTemplate('main-news')?>
        <br>
        <br>
    </div>
</div>

<div class="container">

  <!--  <hr> -->
    <?php //$this->renderTemplate('department')?>
  <!--  <hr> -->
    <?php //$this->renderTemplate('laboratory')?>
</div>

<div class="container" >
    <hr>
    <h2 class="title text-center">
        <?php $ph->link( $ph->lang->Label_Catalog_Razrabotok , '/product') ?>
    </h2>
    <hr>
</div>

<!-- Видео и Скачка файлов -->
<div style="display: block; width: 100%; height: 340px; background-color: #f5f5f5; margin-top: -15px;">
    <div class="col-lg-6 downloads" style=" height: 100%">
        <h2 class="title" style="margin-top: 20px; margin-left: 50px;">
            Каталог разработок ФТИ НАН Беларуси
        </h2>

        <div class="row" style="margin-left: 50px">
            <div class="col-md-3">
                <?php $ph->image('pdf.png', ['class' => 'catalog-image']);?>
            </div>
            <div class="col-md-9">
                <h3 class="catalog-name"> <a href="catalog_ru.pdf" target="_blank"> Каталог продукции  </a> </h3>
                <p>
                Полный список продукции, выпускаемой Физико-Техническим Институтом
                </p>
            </div>
        </div>
        <div class="row" style="margin-left: 50px">
            <div class="col-md-3">
                <?php $ph->image('pdf.png', ['class' => 'catalog-image']);?>
            </div>
            <div class="col-md-9">
                <h3 class="catalog-name"> <a href="catalog_en.pdf" target="_blank"> Product Catalog  </a> </h3>
                <p>
                    Full list of products made by the Institute of Physics and Technology
                </p>
            </div>
        </div>

    </div>
    <div class="col-lg-6 video">
        <div class="embed-responsive embed-responsive-16by9" style="height: 100%">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ax_aS2Aodoc"></iframe>
        </div>
    </div>
</div>


<!-- Продукция -->

<div class="container" >
    <hr>
    <h2 class="title text-center">
        <?php $ph->link( $ph->lang->Label_Production , '/product') ?>
    </h2>
    <hr>
    <?php $this->renderTemplate('main-product')?>
    <br>

</div>
<hr>

<div class="container">

    <h2 class="title text-center">
        <?php $ph->link( $ph->lang->Label_Managment , '/managment') ?>
        <h3></h3>
        <hr>
    </h2>
</div>



<!-- Руководство -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Testimonial -->
      
            <!-- End Testimonial -->
            <div class="testimonial col-md-4 col-sm-6">
                <!-- Author Photo -->
                <div class="author-photo">
                    <?php $ph->image('struct/zalescky_small.jpg')?>
                </div>
                <div class="testimonial-bubble">
                    <blockquote>
                        <!-- Quote -->
                        <!--                        <p class="quote">-->
                        <!---->
                        <!--                        </p>-->
                        <!-- Author Info -->
                        <cite class="author-info">
                            - Залесский Виталий Геннадьевич<br> Директор ФТИ НАН Беларуси
                            <br><br>
                        </cite>
                    </blockquote>
                    <div class="sprite arrow-speech-bubble"></div>
                </div>
            </div>

            <div class="testimonial col-md-4 col-sm-6">
                <div class="author-photo">
                    <?php $ph->image('struct/biely_small.jpg')?>
                </div>
                <div class="testimonial-bubble">
                    <blockquote>
                        <!--                        <p class="quote">-->
                        <!---->
                        <!--                        </p>-->
                        <cite class="author-info">
                            - Белый Алексей Владимирович<br>Заместитель директора по научной работе
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
                        <!--                        <p class="quote">-->
                        <!--                           -->
                        <!--                        </p>-->
                        <cite class="author-info">
                            - Михлюк Анатолий Игнатьевич<br>Заместитель директора по научной и инновационной работе
                        </cite>
                    </blockquote>
                    <div class="sprite arrow-speech-bubble"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>



<!-- Руководство -->
<hr>

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