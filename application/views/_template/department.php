<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>

<div class="container marketing">

    <?php if(empty($url)){
        $ph->tag('h2', 'Научные центры и отделы', ['class' => 'title text-center']);
        ?>
    <?php } else {
         $ph->tag('h2', 'Лаборатории', ['class' => 'title text-center']);
   }?>
    <div class="row">

    <?php for ($i = 0; $i < count( $departmentList ); $i++) { ?>
        <div class="col-lg-4 department-box-container">
            <div class="border">
                    <?php if(empty($url)){ ?>
                    <?php $ph->image('department/' . $departmentList[$i]['url'] . '.jpg', [
                        'class' => 'square-image',
                    ]);?>
                <?php } else { ?>
                        <?php $ph->image('department/'.$url[0].'/'. $departmentList[$i]['url'] . '.jpg', [
                            'class' => 'square-image',
                        ]);?>
                <?php }?>
                <?php  $ph->link_open('department/' . $departmentList[$i]['url'])
                    ->tag('h4', $departmentList[$i]['nameRu'], ['class' => 'department-name'])
                    ->tag_close('a');
                ?>

                <?php if ( count($departmentList[$i]['children']) != 0 ) { ?> <!--если детей нет, то -->
                <ul class="child-list">
                    <?php for ($j = 0; $j < min(count($departmentList[$i]['children']), 3); $j++) {  //выводим лаборатории, максимальное количесво лабораторий в департаменте == 3
                            $ph->tag_open('li')
                                ->link_open('#', ['class' => 'child-name'])
                                ->cut_text( $departmentList[$i]['children'][$j]['nameRu'], 40, true)
                                ->tag('i', null, ['class' => 'glyphicon glyphicon-menu-right'])
                                ->link_close()
                            ->tag_close('li');
                    } ?>
                    <li class="more-link">
                        <a href="department/<?= $departmentList[$i]['url']?>" ><strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i></a>
                    </li>
                </ul>
                <?php } else {?>
                    <ul class="child-list-empty">
                        <li class="more-link">
                            <a href="/department/<?=$url[$i]?>/<?= $departmentList[$i]['url']?>" ><strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i></a>
                        </li>
                    </ul>
                <?php }?>
            </div>
        </div>
    <?php } ?>
</div>
</div>