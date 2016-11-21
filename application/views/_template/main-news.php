<?php
/**
 * Created by PhpStorm.
 * User: goldmagnat
 * Date: 16.05.16
 * Time: 19:12
 */
?>
<style>
    .main-news{
        height: 350px;
        margin: 10px 0px  10px 0px ;
    }
    .news-border{
        display: block;
        position: relative;
        list-style: none;
        text-decoration: none;
        height: 100%;
        width: 100%;

        margin-bottom: 20px;
    }
    .row {
        margin: -15px 10px -15px 10px;

        padding: 20px 10px 20px 10px;
    }
	.news-image-container {
		box-sizing: content-box;
		height: 210px;
		margin-top: 7px;
		padding: 5px;
		border-radius: 5px;
		background-color: #fff;
	}
    .news-image{
		box-sizing: border-box;
        display: block;
        position: relative;
		max-width: 100%;
		
		margin: 0 auto;
        padding:4px;
        background-color:#fff;
        border:1px solid #ccc;
        border:1px solid rgba(0,0,0,0.2);
        -webkit-box-shadow:0 1px 3px rgba(0,0,0,0.1);
        -moz-box-shadow:0 1px 3px rgba(0,0,0,0.1);
        box-shadow:0 1px 3px rgba(0,0,0,0.1);
    }
     h4{
        margin-left: 15px;
        color: #1b365d;
        font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    }
    .news-short-description{
        display: block;
        position: relative;
        margin: 5px 5px 10px 15px;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
    }
    .btn {
        position: absolute;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
       /* background-color: #374a5c; */
        background-color: #ffffff;
        left: 0px;
    }
    .news-name {
        font-size:17px;
        color:#374a5c;
        margin:0;
        color:  #374a5c;
    }



</style>


<div class="row">

<div class="col-lg-4 main-news">
        <div class="news-border">
            <?php $ph->link_open('news/')
                ->tag('h4',' Физико-технический институт посетила делегация ', ['class' => 'news-name'])
				->tag_open('div', ['class' => 'news-image-container'])
                ->image('news/main_news/1.jpg', [
                    'class' => 'news-image',
                ])
				->tag_close('div')
                ->link_close()
                ->link_open('news')

                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Физико-технический институт посетила делегация Института исследования металлов Китайской Академии наук (Institute of Metal Research, Chinese Academy of Sciences (IMR CAS)) из г.Шеньян', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('news', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>



 <div class="col-lg-4 main-news">
            <div class="news-border">
                <?php $ph->link_open('news')
                    ->tag('h4','Cостоялась XI Международная научно-техническая конференция', ['class' => 'news-name'])
					->tag_open('div', ['class' => 'news-image-container'])
                    ->image('news/main_news/3.jpg', [
                        'class' => 'news-image',
                    ])
					->tag_close('div')
                    ->link_close()
                    ->link_open('news')

                    ->tag_close('a'); ?>
                <p class="news-short-description">
                    <?php
                        $ph->cut_text('14-16 сентября 2016 в Институте состоялась XI Международная научно-техническая конференция «Современные методы и технологии создания и обработки материалов»', 165)
                            ->text('...');
                    ?>
                </p>
                <?php
                $ph->link_open('news', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
                ?>

        </div>
    </div>

 <!--
       <div class="col-lg-4 main-news">
            <div class="news-border">
                <?php //$ph->link_open('news')
                   // ->tag('h4','Начала работу XI Международная научно-техническая конференция', ['class' => 'news-name'])
                   // ->image('news/DSC02204_small.jpg', [
                    //    'class' => 'news-image',
                   // ])
                   // ->link_close()
                   // ->link_open('news')

                   // ->tag_close('a'); ?>
                <p class="news-short-description">
                    <?php
                       // $ph->cut_text('В Институте начала работу XI Международная научно-техническая конференция «Современные методы и технологии создания и обработки материалов» ', 165)
                       //     ->text('...');
                    ?>
                </p>
                <?php
                //$ph->link_open('news', ['class' => 'btn btn-default'])
                //->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                //->text(' Подробнее')
               // ->link_close('a');
                ?>

        </div>
    </div>
-->
    
    <div class="col-lg-4 main-news">
        <div class="news-border">
            <?php $ph->link_open('news')
                ->tag('h4','Институт посетила делегация представителей научных организаций РФ', ['class' => 'news-name'])
				->tag_open('div', ['class' => 'news-image-container'])
                ->image('news/main_news/2_1.jpg', [
                    'class' => 'news-image',
                ])
				->tag_close('div')
                ->link_close()
                ->link_open('sport-article')

                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('23 августа институт посетила делегация представителей научных организаций Российской Федерации под руководством Вице-директора Объединенного института ядерных исследований Трубникова Г.В. С представителями организаций МИФИ, ОИЯИ, ИТЭФ были проведены переговоры о проведении совместных работ  ', 149)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('delegacija', ['class' => 'btn btn-default','style' => 'target="_blank'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

<!--
    <div class="col-lg-4 main-news">
        <div class="news-border">
            <?php //$ph->link_open('news/')
                //->tag('h4',' Постановлением Бюро Президиума НАН Беларуси назначен новый директор', ['class' => 'news-name'])
                //->image('news/director.jpg', [
                //    'class' => 'news-image',
                //])
                //->link_close()
                //->link_open('news')

                //->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
               // $ph->cut_text('Постановлением Бюро Президиума НАН Беларуси №348 от 28 июля 2016 года директором ГНУ «Физико-технический институт НАН Беларуси» назначен доктор физико-математических наук, доцент Залесский Виталий Геннадьевич.', 140)
               //     ->text('...');
                ?>
            </p>
            <?php
            //$ph->link_open('news', ['class' => 'btn btn-default'])
            //    ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
            //    ->text(' Подробнее')
            //    ->link_close('a');
            ?>
        </div>
    </div>
-->
<!--
	 <div class="col-lg-4 main-news">
            <div class="news-border">
                <?php //$ph->link_open('news')
                    //->tag('h4','Лаборатория электрофизики организует научно-практический семинар', ['class' => 'news-name'])
                    //->image('news/5.jpg', [
                    //    'class' => 'news-image',
                    //])
                    //->link_close()
                    //->link_open('news')

                   // ->tag_close('a'); ?>
                <p class="news-short-description">
                    <?php
                       // $ph->cut_text('Лаборатория электрофизики НИЦ электронно-лучевых технологий и физики плазмы 20.07.2016 г. организует научно-практический семинар по электронно-лучевым и родственным технологиям для работников промышленных предприятий и других заинтересованных организаций. Место проведения: актовый зал ФТИ НАН Беларуси (ул. академика Купревича, 10) ', 165)
                      //      ->text('...');
                    ?>
                </p>
                <?php
                //$ph->link_open('news', ['class' => 'btn btn-default'])
               // ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
               // ->text(' Подробнее')
              //  ->link_close('a');
                ?>

        </div>
    </div>
-->
</div>