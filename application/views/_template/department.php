<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>

<div class="container">

    <?php $ph->tag('h2', empty($currentDepartment) ? 'Научные центры и отделы' : 'Лаборатории', [
            'class' => 'title text-center'
        ]); ?>

    <div class="row">

    <?php for ($i = 0; $i < count( $departmentList ); $i++) { ?>
        <div class="col-lg-4 department-box-container">
            <div class="border">
                <?php $ph->image('department/' . $departmentList[$i]['fullUrl'] . '.jpg', [
                        'class' => 'square-image',
                    ])
                    ->link_open('/department/' . $departmentList[$i]['fullUrl'])
                    ->tag('h4', $departmentList[$i]['nameRu'], ['class' => 'department-name'])
                    ->tag_close('a');

                if (!empty($departmentList[$i]['children'])) { ?> <!--если детей нет, то -->
                    <ul class="child-list">
                        <?php for ($j = 0; $j < min(count($departmentList[$i]['children']), 3); $j++) {  //выводим лаборатории, максимальное количесво лабораторий в департаменте == 3
                                $ph->tag_open('li')
                                    ->link_open('/department/' . $departmentList[$i]['children'][$j]['fullUrl'], [
                                        'class' => 'child-name',
                                        'data-toggle' => 'tooltip',
                                        'title' => $departmentList[$i]['children'][$j]['nameRu']
                                    ])
                                    ->cut_text( $departmentList[$i]['children'][$j]['nameRu'], 40, true)
                                    ->tag('i', null, ['class' => 'glyphicon glyphicon-menu-right'])
                                    ->link_close()
                                ->tag_close('li');
                        } ?>
                        <li class="more-link">
                            <?php $ph->link(
                                '<strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i>',
                                '/department/' . $departmentList[$i]['fullUrl']
                            ) ?>
                        </li>
                    </ul>
                <?php } else {?>
                    <ul class="child-list-empty">
                        <li class="more-link">
                            <?php $ph->link(
                                '<strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i>',
                                '/department/' . $departmentList[$i]['fullUrl']
                            ) ?>
                        </li>
                    </ul>
                <?php }?>
            </div>
        </div>
    <?php } ?>
</div>
</div>

<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
