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
            <h3>Мы уже встретили Новый год!</h3>
            <br>
            <blockquote>
                <p style="font-size: 0.9em">
                   Всем нашим партнерам, коллегам и друзьям желаем в Новом году смелых идей и удачных решений, успехов, достатка и здоровья.
                </p>
            </blockquote>
            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/newyear/f1.jpg', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/newyear/f2.jpg', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>
        
            
            <?php $ph->
                link_open('news')
                ->image('news/newyear/f3.jpg', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/newyear/f4.jpg', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>

            <?php $ph->
                link_open('news')
                ->image('news/newyear/f5.jpg', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/newyear/f6.jpg', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>

            <div style="clear: both;"></div>
        </div>
    </div>
</div>
