<?php
$ph->include_css('news/new_news.css')
    ->include_css('/main-news.css')
    ->include_system_js_lib('news.js')
?>

<style>
    .read-more{
        color:#333;
        font-size:16px;
        font-weight:bold;
        position: relative;
        transition: color 0.20s linear;
    }
    .read-more:hover{
        text-decoration:none;
        color:#234e7b;
    }
    .read-more:after{
        content:"";
        position: absolute;
        width:30%;
        display: block;
        border:1px solid #234e7b;
        transition: all 0.30s ease;
    }
    .read-more:hover:after{
        width:100%;
    }

</style>

<script>
    $(document).ready(function() {
        $(".blog-section-grids").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
</script>

<div class="row">
    <div class="blog-section-grids" class="owl-carousel">

        <div class="col-md-12 blog-section-grid">
            <?php $ph->image("news/science_news/science_grand.jpg" , ['class' => 'product-image']) ?>
            <div class="blog-title">
                <h4 class="text-center">ПОЛУЧИ ГРАНТ ФТИ НАН БЕЛАРУСИ</h4>
            </div>

            <p class="news-description">
                <?php
                $ph->cut_text('Объявлен конкурс на получение Гранта на выполнение оригинальных поисковых проектов, исследований, приоритетных для развития научного потенциала института.Условия', 170)
                    ->text('...');
                ?>
                <br>
                <?php
                //$ph->link_open('/science/show', ['class' => 'read-more','style' => 'target="_blank'])
                //    ->tag('span', null, ['class' => ''])
                //    ->text(' Подробнее')
                //    ->link_close('a');
                ?>
            </p>
        </div>

        <div class="col-md-12 blog-section-grid">
            <?php $ph->image("news/science_news/science_year.jpg" , ['class' => 'product-image']) ?>
            <div class="blog-title">
                <h4 class="text-center"> ЛУЧШАЯ ЛАБОРАТОРИЯ ФТИ НАН БЕЛАРУСИ</h4>
            </div>
            <p class="news-description">
                <?php
                $ph->cut_text('Смотр-конкурс, целью которого является повышение эффективности и качества деятельности лабораторий.Сроки и условия...', 130)
                    ->text('...');
                ?>
                <br>
                <?php
                //$ph->link_open('/science/show', ['btn class' => 'read-more'])
                //    ->tag('span', null, ['class' => ''])
                //    ->text(' Подробнее')
                //    ->link_close('a');
                ?>
            </p>
        </div>


        <div class="col-md-12 blog-section-grid">
            <?php $ph->image("news/science_news/science_best_result.jpg" , ['class' => 'product-image']) ?>
            <div class="blog-title">
                <h4 class="text-center">ПРЕМИЯ ЗА ЛУЧШИЙ НАУЧНЫЙ РЕЗУЛЬТАТ ГОДА</h4>
            </div>

            <p>
                <?php
                $ph->cut_text('Для молодых ученых предусмотрено премирование за лучший научный результат года и его презентацию. Размер премий и условия', 150)
                    ->text('...');
                ?>
                <br>
                <?php
                //$ph->link_open('/science/show', ['class' => 'read-more','style' => 'target="_blank'])
                //    ->tag('span', null, ['class' => ''])
                //    ->text(' Подробнее')
                //    ->link_close('a');
                ?>
            </p>

        </div>

        <div class="col-md-12 blog-section-grid">
            <?php $ph->image("news/science_news/science_welcome.jpg" , ['class' => 'product-image']) ?>
            <div class="blog-title">
                <h4 class="text-center">ПРИГЛАШАЕМ СОТРУДНИКОВ ФИЗТЕХА К УЧАСТИЮ!</h4>
            </div>

            <p class="news-description">
                <?php
                $ph->cut_text('Приглашаем к участию в конкурсах, приуроченных к Году науки. Перспективные направления, поощрение талантливых ученых', 120)
                    ->text('...');
                ?>
                <br>
                <?php
                //$ph->link_open('/science/show', ['class' => 'read-more','style' => 'target="_blank'])
                //    ->tag('span', null, ['class' => ''])
                //    ->text(' Подробнее')
                //    ->link_close('a');
                ?>
            </p>
        </div>


    </div>
</div>


