<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('laboratory.css') ?>

<div class="container marketing">
    <h2 class="title text-center">Лаборатории</h2>

    <div class="row">
        <?php foreach($baseLaboratory as $baseLab) {?>
            <div class="col-lg-4 box-container">
                <div class="box">
                    <?php $ph->image('laboratory/'.$baseLab['url'].'.jpg', [
                        'class' => 'imageCube',
                    ]);?>
                    <h2 class="title-class"><?=$baseLab['nameRu']?></h2>
                    <ul class="block-list">
                        <li class="more">
                            <a href="#" ><strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</div>