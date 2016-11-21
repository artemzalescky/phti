<?php
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
            <h3>Институт посетила делегация представителей научных организаций РФ </h3>
            <br>

            <blockquote>
                <p style="font-size: 0.9em">
                    23 августа институт посетила делегация представителей научных организаций Российской Федерации под руководством Вице-директора Объединенного института ядерных исследований Трубникова Г.В. 
                    С представителями организаций МИФИ, ОИЯИ, ИТЭФ были проведены переговоры о проведении совместных работ в рамках ряда крупных проектов, таких как Ниобий-2, Ника и др.<br>
                </p>
            </blockquote>
            
            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/articles/delegat/1.JPG', [
                    'class' => 'sport-image',
                ]);

            $ph->link_open('news')
                ->image('news/articles/delegat/2.JPG', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
           ?>
            <div style="clear: both;"></div>

            <blockquote>
                <p style="font-size: 0.9em">
                    Представители научных организаций проявили заинтересованность к технологиям и оборудованию по нанесению покрытий различного назначения, магнитоимпульсной и гидроударной штамповке, электронно-лучевой сварке.
                </p>
            </blockquote>
            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/articles/delegat/3.JPG', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/articles/delegat/4.JPG', [
                    'class' => 'sport-image',
                ])
            ->tag_close('a');
            ?>
            <div style="clear: both;"></div>
            

        </div>
    </div>
</div>
