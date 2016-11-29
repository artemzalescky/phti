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
            <h3>Физико-технический институт НАН Беларуси посетила делегация из компании LG Electronics</h3>
            <br>

            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/LG/1.jpg', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/LG/3.jpg', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>

            <blockquote>
                <p style="font-size: 0.9em">
                    25 ноября 2016 года Физико-технический институт НАН Беларуси посетила делегация из компании LG Electronics во главе с директором
                    Московского технологического центра филиала LG Electronics господином Хен Сан Ву. В рамках научных докладов,
                    переговоров и презентаций со стороны корейских партнеров был проявлен интерес к следующим разработкам: <br>
                    -нано композиционные упрочняющие сверхтвердые покрытия;<br>
                    -цветные и износостойкие покрытия на алюминиевых сплавах;<br>
                    -электронно-лучевая сварка;<br>
                    -точная и магнитоимпульсная штамповка;<br>
                    -пленочные нагреватели на керамической основе;<br>
                    Проведены переговоры о совместном сотрудничестве.
                </p>
            </blockquote>

            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/LG/2.jpg', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/LG/4.jpg', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>
