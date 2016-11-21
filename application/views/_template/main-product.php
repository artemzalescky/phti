<?php
/**
 * Created by PhpStorm.
 * User: goldmagnat
 * Date: 11.06.16
 * Time: 18:00
 */?>

<?php $ph->include_css('main-product.css') ?>
<style>
    .main-product{
        height: 170px;
        margin: 10px 0px  10px 0px ;

    }
    .product-border{
        display: block;
        position: relative;
        background-color: #fff;
        height: 100%;
        width: 100%;
        -webkit-border-radius: 4px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 4px;
        -moz-background-clip: padding;
        border-radius: 4px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-shadow: inset 0 1px #fff,0 1px 2px #c8cfe6;
        -moz-box-shadow: inset 0 1px #fff,0 1px 2px #c8cfe6;
        box-shadow: inset 0 1px #fff,0 1px 2px #c8cfe6;
        color: inset 0 1px #fff,0 1px 2px #c8cfe6;
    }

    h5 {
        font-family: inherit;
        font-weight: bold;
        color: inherit;
        text-rendering: optimizelegibility;
        text-align: left;
        padding-left: 15px;
        padding-top: 10px;
        font-size: 1.2em;
        color: #1b365d;
        height: 40px;
    }
    .news-short-description {
        position: relative;
        display: block;
        width: 95%;
        height: 70px;
    }
    .btn{
        float: right;
        border: none !important;
    }

</style>


<div class="row" style="background-color:#e6e6e6; ">
	<div class="col-lg-4 main-product" style="margin-top: 0px">
        <div class="product-border">
            <?php $ph->link_open('product/Laser-processing-of-materials')
                ->tag('h5','Лазерная обработка материалов', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Laser-processing-of-materials')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Лазерная обработка материалов широко применяется в различных областях', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Laser-processing-of-materials', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>
    <div class="col-lg-4 main-product" style="margin-top: 0px">
        <div class="product-border">
            <?php $ph->link_open('product/microcrystalline-and-amorphous-materials')
                ->tag('h5','Микрокристаллические и аморфные материалы', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/microcrystalline-and-amorphous-materials')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Микрокристаллические и аморфные материалы используются для обогрева электронных устройств, защита электронных устройств, находящихся в пластмассовых корпусах, от воздействия внешних электромагнитных полей', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/microcrystalline-and-amorphous-materials', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 0px">
        <div class="product-border">
            <?php $ph->link_open('product/technomages')
                ->tag('h5','ТЕХНОМАГ', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/technomages')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Научно-производственный центр занимается разработкой и исследованием свойств материалов, способных выдерживать ударные импульсные нагрузки, защитных композиций и изготовлению наукоемких образцов изделий противо-ударной и противопульной защиты', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/technomages', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/Electron-beam-processing-of-materials')
                ->tag('h5','Электронно-лучевая и ионная химико-термическая обработка материалов', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Electron-beam-processing-of-materials')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('<br>Назначение оборудования электронно-лучевой обработки:<br>
• рафинирование металлических материалов', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Electron-beam-processing-of-materials', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('phti/product/Plasma-processes')
                ->tag('h5','Плазменные процессы', ['class' => 'product-name'])
                ->link_close()
                ->link_open('phti/product/Plasma-processes')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Лаборатория физики плазменных процессов производит различное оборудование', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('phti/product/Plasma-processes', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>


    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/Induction-heating')
                ->tag('h5','Индукционный нагрев', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Induction-heating')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Метод бесконтактного нагрева электропроводящих материалов токами высокой частоты', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Induction-heating', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>


    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/high-energy-processing-techniques')
                ->tag('h5','Высокоэнергетические методы обработки', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/high-energy-processing-techniques')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Ионно-лучевая обработка металлов и сплавов, металлизация рулонных материалов на полимерной и бумажной основах, триботехнические испытания материалов и узлов трения в экстремальных условиях внешней среды, исследование адгезионных и прочностных характеристик тонких пленок,', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/high-energy-processing-techniques', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/special-alloys')
                ->tag('h5','Специальные сплавы', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/special-alloys')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Примеры возможного изготовления наукоемкой продукции. <br>
1.	Заготовки уплотнительных колец трансмиссий тягачей, выпускаемых Минским заводом колесных тягачей, изготовленных из деформированного высокопрочного чугуна по новой технологии (800 шт. в год). ', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/special-alloys', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/Vacuum-plasma-coating')
                ->tag('h5','Вакуумно-плазменные покрытия', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Vacuum-plasma-coating')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Вакуумное осаждение представляет группу способов получения покрытий, в которых атомарный поток осаждаемого вещества создается с помощью физических процессов испарения материалов в вакууме или распыления атомов ', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Vacuum-plasma-coating', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/Magnetic-pulse-treatment')
                ->tag('h5','Упрочняющая магнитно-импульсная обработка', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Magnetic-pulse-treatment')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Упрочняющая магнитно-импульсная обработка широко используется в промышленности', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Magnetic-pulse-treatment', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>


    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/applied-mechanics')
                ->tag('h5','Прикладная механика', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/applied-mechanics')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Выявление закономерностей и механизмов деградации служебных свойств металла длительно эксплуатируемых стальных конструкций (сосуды, трубопроводы и др.) на основе нелинейной механики', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/applied-mechanics', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>


    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/applied-mechanics')
                ->tag('h5','Точная штамповка', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/applied-mechanics')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Технология точной штамповки с высокотемпературной термомеханической обработкой. <br>
                Технология позволяет: <br>
•	Увеличить коэффициент использования металла до 95 %  ', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/applied-mechanics', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>



    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/surface-interactions')
                ->tag('h5','Поверхностное взаимодействие', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/surface-interactions')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Поверхностное взаимодествие широко применяется в различных сферах', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/surface-interactions', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/Cross-wedge-rolling')
                ->tag('h5','Поперечно-клиновая прокатка', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/Cross-wedge-rolling')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('Поперечно-клиновая прокатка (ПКП) - высокопроизводительная ресурсосберегающая технология обработки металлов давлением с коэффициентом использования металла (КИМ) 0,8-0,98. Методом ПКП изготовляют детали типа тел вращения ', 140)
                    ->text('...');
                ?>
            </p>
            <?php
            $ph->link_open('product/Cross-wedge-rolling', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>

    <div class="col-lg-4 main-product" style="margin-top: 10px">
        <div class="product-border">
            <?php $ph->link_open('product/cross-wedge-rolling-2')
                ->tag('h5','Станы и технологии прокатки', ['class' => 'product-name'])
                ->link_close()
                ->link_open('product/cross-wedge-rolling-2')
                ->tag_close('a'); ?>
            <p class="news-short-description">
                <?php
                $ph->cut_text('', 140)
                    ->text('Технологии и оборудование поперечно-винтовой прокатки, технологии и оборудование для изготовления и упрочнения упругих элементов автомобильной и сельскохозяйственной техники...');
                ?>
            </p>
            <?php
            $ph->link_open('product/cross-wedge-rolling-2', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </div>
    </div>


</div>




