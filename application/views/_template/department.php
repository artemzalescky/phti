<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>


<div class="container marketing">
    <hr>
    <h2 class="title text-center">Научные центры и отделы</h2>

    <div class="row">
    <?php for ($i = 0; $i < count($mainDepartments); $i++) { ?>
        <div class="col-lg-4 department-box-container">
            <div class="border">
                    <?php $ph->image('department/' . $mainDepartments[$i]['url'] . '.jpg', [
                        'class' => 'square-image',
                    ]);?>
                <h2 class="department-name"><?=$mainDepartments[$i]['nameRu']?></h2>
                <ul class="child-list">
                    <?php for ($j = 0; $j < min(count($listLab[$i]['children']), 3); $j++) {  //выводим лаборатории, максимальное количесво лабораторий в департаменте == 3
                            $ph->tag_open('li')
                                ->link_open('#', ['class' => 'child-name'])
                                ->cut_text($listLab[$i]['children'][$j]['nameRu'], 40, true)
                                ->tag('i', null, ['class' => 'glyphicon glyphicon-menu-right'])
                                ->link_close()
                            ->tag_close('li');
                    } ?>
                    <li class="more-link">
                        <a href="#" ><strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
</div>