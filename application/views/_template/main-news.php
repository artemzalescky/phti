
<div class="blog-section-grids">

    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/belaz_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ОАО «БЕЛАЗ»: модернизация и развитие</h4>
        </div>

        <p>
            <?php
            $ph->cut_text('Уверенные позиции, которые занимает ОАО «БЕЛАЗ» на мировых рынках большегрузной карьерной техники, связаны с непрерывными инвестициями и постоянным техническим перевооружением предприятия, которое твердо шагает в ногу с современными тенденциями.', 150)
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


    <div class="col-md-4 blog-section-grid">
        <?php $ph->image("news/main_news/orsha-mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center">ФТИ участвует в модернизации промышленных предприятий</h4>
        </div>

        <p class="news-description">
            <?php
            $ph->cut_text('Многоплановость научных направлений в деятельности института позволяет решать ряд сложных комплексных научно-технических задач по модернизации', 150)
                ->text('...');
            ?>
            <?php
            $ph->link_open('news#modern', ['class' => 'btn btn-default','style' => 'target="_blank'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </p>

    </div>
    

     <div class="col-md-4 blog-section-grid">
         <?php $ph->image("news/main_news/seminar2_mini.jpg" , ['class' => 'product-image']) ?>
        <div class="blog-title">
            <h4 class="text-center"> в Физико-техническом институте прошел семинар</h4>
        </div>
        <p class="news-description">
            <?php
            $ph->cut_text('01.02.2017 года в Физико-техническом институте прошел семинар, посвященный теме «Перспективы использования аустенито-бейнитного чугуна (ADI) в Беларуси», инициатором и докладчиком, которого выступал (к.т.н.) Покровский А.И.', 145)
                ->text('...');
            ?>
            <?php
            $ph->link_open('news#sem2', ['class' => 'btn btn-default'])
                ->tag('span', null, ['class' => 'glyphicon glyphicon-list'])
                ->text(' Подробнее')
                ->link_close('a');
            ?>
        </p>

    </div>
    



</div>
