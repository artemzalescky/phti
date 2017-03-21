<div class="ph-infinite-slider management">
    <div class="data-item" data-image-url="<?= $ph->image_path('struct/zalescky.jpg') ?>">
        <div class="title">Залесский Виталий Геннадьевич</div>
        <div class="preview-title">Залесский Виталий Геннадьевич</div>
        <div class="description">
            Должность: Директор ФТИ НАН Беларуси<br>
            Время приема: среда 16.00-17.30<br>
            Номер кабинета: каб. 301<br>
            Номер телефона: тел. 267-60-10<br>
            e-mail: V.Zalesski@mail.ru
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('struct/biely.jpg') ?>">
        <div class="title">Белый Алексей Владимирович</div>
        <div class="preview-title">Белый Алексей Владимирович</div>
        <div class="description">
            Должность: Заместитель директора по научной работе<br>
            Время приема: четверг 16.00-17.30<br>
            Номер кабинета: каб. 317<br>
            Номер телефона: тел. 265-07-98
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('struct/mihluk.jpg') ?>">
        <div class="title">Михлюк Анатолий Игнатьевич</div>
        <div class="preview-title">Михлюк Анатолий Игнатьевич</div>
        <div class="description">
            Должность: Заместитель директора по научной и инновационной работе<br>
            Время приема: понедельник 16.00-17.30<br>
            Номер кабинета: каб. 325<br>
            Номер телефона: тел. 267-42-75
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('struct/povarov.jpg') ?>">
        <div class="title">Поваров Олег Евгеньевич</div>
        <div class="preview-title">Поваров Олег Евгеньевич</div>
        <div class="description">
            Должность: Зам. директора по общим вопросам<br>
            Номер кабинета: 303 к. 2<br>
            Номер телефона: 8029 6836474
        </div>
    </div>
    <div class="data-item" data-image-url="<?= $ph->image_path('struct/Poko_mini.jpg') ?>">
        <div class="title">Поко Ольга Александровна</div>
        <div class="preview-title">Поко Ольга Александровна</div>
        <div class="description">
            Должность: Ученый секретарь<br>
            Номер телефона: 267-64-53<br>
            Номер мобильного телефона: 8-0296-19-60-15
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.ph-infinite-slider.management').ph_infinite_slider({
            imgHeight: 188,
            imgWidth: 188,
            padding: 15,
            roundImages: true,
            previewTitleHeight: 55
        });
    });
</script>

<style>
    .attestat-useful-information-container{
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #f9f9f9;
    }
</style>