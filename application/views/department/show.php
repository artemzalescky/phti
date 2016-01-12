<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>


<div class="container marketing">
    <h2 class="title text-center">Научные центры и отделы</h2>

    <div class="row">
        <?php foreach ($departmentList as $list){ ?>
            <div class="col-lg-4 box-container">
                <div class="box">
                    <?php $ph->image('department/'.$list['url'].'.jpg', [
                        'class' => 'imageCube',
                    ]);?>
                    <h2 class="title-class"><?=$list['nameRu']?></h2>
                    <ul class="block-list">
                        <!-- Определяем количество лабораторий в данном департаменте -->
                        <!-- максимальное количество отображаемый лабораторий = 3
                        <!-- если в научном центре < 3 лабораторий, то $kol = $max_kol -->
                        <?php
                        $max_kol = count($list['children']);
                        if ($max_kol >= 3) {
                            $kol = 3;
                        } else {
                            $kol = $max_kol;
                        }
                        ?>
                        <?php for($i = 0; $i < $kol; $i++) { ?>
                            <li>
                                <a href="#" class="catalog-short-description">
                                    <?php
                                    if (!empty($list['children'][$i]['nameRu'])) {
                                        $ph->cut_text( $list['children'][$i]['nameRu'], 40)
                                            ->text('...');
                                    } ?>
                                    <i class="glyphicon glyphicon-menu-right"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <!--если в научном центре 2 лаборатории, то -->
                        <?php if ($kol == 2) { ?>
                            <li>
                                <div style="display: block; position: relative; height: 45px"></div>
                            </li>
                        <?php }?>
                            <?php ?>
                        <li class="more">
                            <a href="#" >Подробнее <i class="glyphicon glyphicon-th-list"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

