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
            <h3>Cостоялось подписание договора о научно-техническом сотрудничестве между Белорусским государственным технологическим университетом и Физико-техническим институтом</h3>
            <br>

            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/dogovor/dogovor1.JPG', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/dogovor/dogovor3.JPG', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>

            <blockquote>
                <p style="font-size: 0.9em">
                    20  декабря состоялось подписание договора о научно-техническом сотрудничестве между Белорусским государственным технологическим университетом и Физико-техническим институтом. <br>
                    Состоялся продуктивный обмен мнениями по ряду вопросов, касающихся систем защиты, современных аддитивных технологий,  процессов упрочнения различных изделий. 
                    Стороны отметили высокую заинтересованность в подготовке научных кадров в работе над  совместными  проектами как в рамках научно-технических программ, так и  в новых, прорывных направлениях. 
                    Несмотря на то, что между БГТУ и ФТИ существуют давние связи, возникла необходимость подписания такого документа. Во-первых, это позволяет более интенсивно и эффективно  использовать научно-исследовательскую и экспериментальную базу обеими сторонами. 
                    Во-вторых, подтверждает стратегическое партнерство по ряду перспективных направлений. 
                    В-третьих, конкретизирует взаимную заинтересованность и формирует новые точки соприкосновения в перспективных быстроразвивающихся направлениях.  Достигнуто соглашение о проведении совместных совещаний и подготовке новых проектов в ближайшей перспективе.
                </p>
            </blockquote>

            <div style="clear: both;"></div>
            <?php $ph->
                link_open('news')
                ->image('news/dogovor/dogovor2.JPG', [
                    'class' => 'sport-image',
                ]);


            $ph->link_open('news')
                ->image('news/dogovor/dogovor4.JPG', [
                    'class' => 'sport-image',
                ])
                ->tag_close('a');
            ?>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>
