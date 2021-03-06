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
            autoPlay:15000
        });
    });
</script>

<div class="row">
        <div class="blog-section-grids" class="owl-carousel" class="carousel slide" data-ride="carousel" data-interval="15000">
        
            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/china_akademia_nayk_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ФТИ НАН Беларуси посетила делегация из Института исследования металлов Китайской академии наук  </h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('С 22.05.2017г. по 31.05.2017г. ФТИ НАН Беларуси посетила делегация из Института исследования металлов Китайской академии наук (г.Шэньян). В рамках визита обсужден вопрос создания совместной белорусско-китайской лаборатории исследования материалов', 158)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#china_akademia_nayk  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>
        
            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/bolgarija_akademia_nayk_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ФТИ НАН Беларуси посетила делегация из Центральной лаборатории прикладной физики Болгарской академии наук. </h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('С 23.05.2017г. по 27.05.2017г. ФТИ НАН Беларуси посетила делегация из Центральной лаборатории прикладной физики Болгарской академии наук. В рамках визита подписан акт сдачи-приемки работ по лицензионному договору о предоставлении права использования технологии нанесения слоя оксида алюминия', 98)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#bolgarija_akademia_nayk  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>
            
        
            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/delegacijaJLTech-mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ФТИ НАН Беларуси посетила делегация из компании J&L Tech Co., Ltd. (Республика Корея). </h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('С 11.05.2017 по 12.05.2017 ФТИ НАН Беларуси посетила делегация из компании J&L Tech Co., Ltd. (Республика Корея). В ходе визита обсужден вопрос о создания маркетингового центра продукции компании J&L Tech на базе ФТИ НАН Беларуси.', 148)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#delegacijaJLTech  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>
        
             <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/company_diamond_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ФТИ НАН Беларуси подписал договор с компании Diamond InnoTech Co., Ltd. (Тайвань)</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('По итогам визита делегации компании Diamond InnoTech Co., Ltd. (Тайвань) в ФТИ НАН Беларуси 07.05.2017г. подписан договор о проектировании, изготовлении и поставке вакуумного оборудования для нанесения алмазоподобных покрытий.', 148)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#company_diamond  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/belaz19042017_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ОАО «БЕЛАЗ» посетила делегация провинции Хунань Китайской Народной Республики</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('13 апреля 2017 г. Белорусский автомобильный завод с деловым визитом посетила делегация провинции
                    Хунань во главе с секретарем комитета Коммунистической партии Китая провинции Хунань Ду Цзяхао.', 148)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#belaz2  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/anisovich_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">Проведен семинар «Современные методы металлографического анализа»</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('18 апреля 2017 года в ФТИ НАН Беларуси проведен семинар «Современные методы металлографического анализа» под руководством доктора физико-математических наук Анисович Анны Геннадьевны.', 148)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#anisovich  ', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/seminar2_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">18 апреля 2017 года состоится семинар «Современные методы металлографического анализа»</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('18 апреля 2017 года в 14-30 в Физико-техническом институте НАН Беларуси по адресу: г. Минск, ул. Купревича, 10. Тематика семинара «Современные методы металлографического анализа», проводит семинар доктор физико-математических наук Анисович Анна Геннадьевна.', 120)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#sem2', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/ufa_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">Cостоялось подписание cоглашения о научно-техническом сотрудничестве между ФТИ НАН Беларуси и УГАТУ.</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('23 марта 2017 г. в рамках визита сотрудников ФТИ НАН Беларуси в Уфимский государственный авиационный технический университет (УГАТУ), который является одним из ведущих авиационных вузов России, состоялось подписание Соглашения о научно-техническом и академическом сотрудничестве между ФТИ НАН Беларуси и УГАТУ.', 90)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#ufa', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/kugl_stol_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center"> В Физико-техническом институте НАН Беларуси состоялся «круглый стол»</h4>
                </div>
                <p class="news-description">
                    <?php
                    $ph->cut_text('28 февраля в Физико-техническом институте НАН Беларуси состоялся «круглый стол», посвященный актуальным вопросам разработки новых материалов и технологий биомедицинского назначения.', 130)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#krug-stol', ['btn class' => 'read-more'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>


            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/belaz_mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ОАО «БЕЛАЗ»: модернизация и развитие</h4>
                </div>

                <p>
                    <?php
                    $ph->cut_text('Уверенные позиции, которые занимает ОАО «БЕЛАЗ» на мировых рынках большегрузной карьерной техники, связаны с непрерывными инвестициями и постоянным техническим перевооружением предприятия, которое твердо шагает в ногу с современными тенденциями.', 150)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#belaz', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>

            </div>

            <div class="col-md-12 blog-section-grid">
                <?php $ph->image("news/main_news/orsha-mini.jpg" , ['class' => 'product-image']) ?>
                <div class="blog-title">
                    <h4 class="text-center">ФТИ участвует в модернизации промышленных предприятий</h4>
                </div>

                <p class="news-description">
                    <?php
                    $ph->cut_text('Многоплановость научных направлений в деятельности института позволяет решать ряд сложных комплексных научно-технических задач по модернизации', 120)
                        ->text('...');
                    ?>
                    <br>
                    <?php
                    $ph->link_open('news#modern', ['class' => 'read-more','style' => 'target="_blank'])
                        ->tag('span', null, ['class' => ''])
                        ->text(' Подробнее')
                        ->link_close('a');
                    ?>
                </p>
            </div>
        </div>
</div>


