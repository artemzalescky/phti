<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>


<div class="container marketing">
    <hr>
    <h2 class="title text-center">Научные центры и отделы</h2>

    <div class="row">
    <?php for($i = 0; $i < count($mainDepartments); $i++) { ?>
        <div class="col-lg-4 box-container">
            <div class="box">
                    <?php $ph->image('department/'.$mainDepartments[$i]['url'].'.jpg', [
                        'class' => 'imageCube',
                    ]);?>
                <h2 class="title-class"><?=$mainDepartments[$i]['nameRu']?></h2>
                <ul class="block-list">
                <!-- Определяем количество лабораторий в данном департаменте -->
                    <?php
                    $max_kol = count($listLab[$i]['children']);
                    if ($max_kol >= 3) {
                        $kol = 3;
                    } else {
                        $kol = $max_kol;
                    }
                     ?>
                <!--выводим лаборатории, максимальное количесво лабораторий в департаменте == 3 -->
                    <?php for($j =0; $j < $kol; $j++) { ?>
                    <li>
                        <a href="#" class="catalog-short-description">
                            <?php  if (!empty($listLab[$i]['children'][$j]['nameRu'])) {
                                $ph->cut_text($listLab[$i]['children'][$j]['nameRu'], 40)
                                    ->text('...');
                            }
                            ?>
                            <i class="glyphicon glyphicon-menu-right"></i>
                        </a>
                    </li>
                    <?php } ?>

                    <li class="more">
                        <a href="#" >Подробнее <i class="glyphicon glyphicon-th-list"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
</div>