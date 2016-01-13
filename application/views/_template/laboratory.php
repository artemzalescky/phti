<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('laboratory.css') ?>

<div class="container marketing">
    <h2 class="title text-center">Лаборатории</h2>

    <div class="row">
        <?php foreach($baseLaboratory as $baseLab) {?>
            <div class="col-lg-4 laboratory-box-container">

                <div class="laboratory-border">
                    <?php $ph->image('laboratory/' . $baseLab['url'] . '.jpg', [
                        'class' => 'square-image',
                    ]);?>
                    <h2 class="laboratory-name"><?=$baseLab['nameRu']?></h2>
                    <ul class="laboratory-child-list">
                        <li class="laboratory-more-link">
                            <a href="#" ><strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</div>