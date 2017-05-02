<?php
$ph->include_js_lib('ph-infinite-slider.js')
?>

<div class="ph-infinite-slider science">
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">Разработка месторождений нефти на Урале</div>
        <div class="preview-title">Разработка месторождений нефти на Урале</div>
        <div class="description">
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">Разработка месторождений нефти на Урале</div>
        <div class="preview-title">Разработка месторождений нефти на Урале</div>
        <div class="description">
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">Разработка месторождений нефти на Урале</div>
        <div class="preview-title">Разработка месторождений нефти на Урале</div>
        <div class="description">
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">Разработка месторождений нефти на Урале</div>
        <div class="preview-title">Разработка месторождений нефти на Урале</div>
        <div class="description">
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('main/menu1.png') ?>">
        <div class="title">Разработка месторождений нефти на Урале</div>
        <div class="preview-title">Разработка месторождений нефти на Урале</div>
        <div class="description">
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######<br>
            Описание #######
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.science').ph_infinite_slider({
            imgHeight: 260,
            imgWidth: 260,
            padding: 70,
            roundImages: true,
            previewTitleHeight: 55
        });
    });
</script>
