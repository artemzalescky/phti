
<div class="blog-section-grids">
    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/lab_elt_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Введена в эксплуатацию еще одна установка ионного азотирования.</h4>
        </div>

        <p class="news-description">
            <?php
            $ph->cut_text('Лабораторией электрофизики НИЦ электронно-лучевых технологий и физики плазмы 22.12.2016 г. введена в эксплуатацию еще одна установка ионного азотирования. На этот раз заказчиком стал Белорусский национальный технический университет. ', 149)
                ->text('...');
            ?>
            <?php
            $ph->link_open('news#lab_elt', ['class' => 'btn btn-default','style' => 'target="_blank'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </p>

    </div>
    

     <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/dogovor4_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Cостоялось подписание договора о научно-техническом сотрудничестве </h4>
        </div>
        <p class="news-description">
            <?php
            $ph->cut_text('20  декабря состоялось подписание договора о научно-техническом сотрудничестве между Белорусским государственным технологическим университетом и Физико-техническим институтом.
                    Состоялся продуктивный обмен мнениями по ряду вопросов, касающихся систем защиты, современных аддитивных технологий,  процессов упрочнения различных изделий. ', 150)
                ->text('...');
            ?>
            <?php
            $ph->link_open('news#bgu', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </p>

    </div>
    

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/china2.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">Представители ФТИ посетили Пекинский институт авиационных материалов</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('В период с 10 по 13 декабря представители ФТИ посетили Пекинский институт авиационных материалов.
             Были сделаны презентации о разработках института. Китайские коллеги продемонстрировали собственные разработки, оборудование и лаборатории.', 149)
                ->text('...');
            ?>
            <?php
            $ph->link_open('news#china2', ['class' => 'btn btn-default','style' => 'target="_blank'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </p>

    </div>

</div>
