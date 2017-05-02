<?php
$ph->include_js_lib('ph-infinite-slider.js')
?>

<div class="ph-infinite-slider gos_programs">
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">«Новые материалы для техники»(«Материалы в технике»)</div>
        <div class="preview-title">«Новые материалы для техники»</div>
        <div class="description">
           <h5> <strong>Цель подпрограммы:</strong> разработка новых многофункциональных и специализированных материалов, развитие технологических
            основ их обработки с использованием литья, пластической деформации, порошковой металлургии, ....</h5>
           <h5> подробнее можно посмотреть <a href="https://drive.google.com/open?id=0B4ehyaGAtV5TbGVtNU9ZWTdIMzQ" target="_blank"><strong>здесь</strong></a>


        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">«Новые высокоэффективные технологии и оборудование для получения и обработки материалов с использованием концентрированных
            потоков энергии» («Плазменные и пучковые технологии»)</div>
        <div class="preview-title">«Плазменные и пучковые технологии»</div>
        <div class="description">
            <h5><strong>Цель подпрограммы:</strong> <br>создание на базе фундаментальных и прикладных научных исследований высокоэффективных
                энергосберегающих технологических процессов получения и обработки материалов </h5>
            <h5> подробнее можно посмотреть <a href="https://drive.google.com/open?id=0B4ehyaGAtV5TbGVtNU9ZWTdIMzQ" target="_blank"><strong>здесь</strong></a>

        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">«Технологии машиностроения»</div>
        <div class="preview-title">«Технологии машиностроения»</div>
        <div class="description">
            <h5><strong>Цель подпрограммы:</strong><br> создание и освоение в производстве передовых тех-нологий и оборудования, основанных на новейших научных
                достижениях и анализе мирового опыта и содействующих производству
                и расширению экспорта конкурентоспособных образцов отечественной продукции.</h5>
            <h5> подробнее можно посмотреть <a href="https://drive.google.com/open?id=0B4ehyaGAtV5TbGVtNU9ZWTdIMzQ" target="_blank"><strong>здесь</strong></a>

        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">«Роботизированные комплексы и технологии»</div>
        <div class="preview-title">«Роботизированные комплексы и технологии»</div>
        <div class="description">
            <h5><strong>Цель программы:</strong><br> развитие авиакосмических и наземных роботизированных технологий и комплексов,
                базирующихся на новых подходах к конструкции малоразмерных пилотируемых и беспилотных летательных аппаратов</h5>
            <h5> подробнее можно посмотреть <a href="https://drive.google.com/open?id=0B4ehyaGAtV5TbGVtNU9ZWTdIMzQ" target="_blank"><strong>здесь</strong></a>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.gos_programs').ph_infinite_slider({
            imgHeight: 270,
            imgWidth: 270,
            padding: 50,
            roundImages: true,
            previewTitleHeight: 80
        });
    });
</script>
