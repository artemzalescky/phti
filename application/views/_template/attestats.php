<div class="ph-infinite-slider certificate">
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/0.jpg') ?>">
        <div class="title">Аттестат Аккредитации</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/1.jpg') ?>">
        <div class="title">Аттестат Аккредитации</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/2.jpg') ?>">
        <div class="title">Аттестат Аккредитации</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/3.jpg') ?>">
        <div class="title">Сертификат Продукции Собственного Производства</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/4.jpg') ?>">
        <div class="title">Сертификат о Соответствии</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/5.jpg') ?>">
        <div class="title">Специальное Разрешение</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/6.jpg') ?>">
        <div class="title">Специальное Разрешение</div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('attestat/7.jpg') ?>">
        <div class="title">Специальное Разрешение</div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.certificate').ph_infinite_slider({
            imgHeight: 272,
            imgWidth: 188,
            padding: 15,
            arrowsBackgroundColor: '#f9f9f9'
        });
    });
</script>