<?php
/**
 * Created by PhpStorm.
 * User: goldmagnat
 * Date: 29.11.16
 * Time: 22:47
 */

?>
<style>
    .sport-image{
        display: block;
        position: relative;
        width: 500px;
        height: 300px;
        margin-bottom: 10px;
        float: right;
        margin-right: 40px;
        margin-left: 40px;

        margin-left: 0px !important;
    }

    .btn {
        position: absolute;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
        margin-top: -5px;
        right: 10px;
    }




</style


<div class="row">
    <div class="col-lg-12 main-news">
        <div class="news-border">
        <br>
            <h3>Cостоялся Белорусско-Китайский молодежный инновационный форум «Новые горизонты – 2016».</h3>
            <br>

            <div style="clear: both;"></div>
            <blockquote>
                <p style="font-size: 0.9em">
                    29-30 ноября 2016 года в г. Минск на базе Белорусского национального технического университета состоялся Белорусско-Китайский молодежный инновационный форум «Новые горизонты – 2016».
                    Форум проходил одновременно в Белорусском национальном техническом университете и Северо-Восточном университете (Шэньян, Китай). <br>
                    В мероприятиях приняло участии свыше 200 специалистов и студентов из столичных и региональных университетов. Столько же участников зарегистрировалось и в Северо-Восточном университете.<br>
                    В рамках Форума были проведены конкурс проектов «Моя идея», выставка инженерного творчества «Созидатели будущего» , а также состоялись научные секции «Шелковый путь: экономика и инновации Беларуси и Китая», 
                    «Архитектура и строительство», «Промышленная экология. Энерго- и ресурсосбережение», «Приборостроение и машиностроение», «Новые материалы».
                </p>
            </blockquote>
            <div style="clear: both;"></div>
            
            <?php $ph->
                link_open('news')
                ->image('news/forum/1.JPG', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/forum/3.JPG', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>

            <blockquote>
                <p style="font-size: 0.9em">
                    Сотрудники Физико-технического института НАН Беларуси ( Шпарло Д.А., Марышева А.А., Бакиновский А.А., Коваль И.В.) выступили с докладами на научной секции
                     «Приборостроение и машиностроение», а также представили свои научны работы на конкурсе "Моя идея". Марышева А.А. заняла 3-е место в номинации лучшая научно-исследовательская работа. <br>
                     https://vk.com/startupbntu (фото награждения Марышевой)
                </p>
            </blockquote>

            <div style="clear: both;"></div>
        </div>
    </div>
</div>
