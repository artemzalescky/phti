<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>

<div class="container">

    <h2 class="title text-center"><?= $ph->lang->Label_Laboratories ?></h2>

    <hr>

    <div class="row">

        <?php for ($i = 0; $i < count( $baseLaboratories ); $i++) { ?>
            <div class="col-lg-4 department-box-container">
                <div class="border">
                    <?php $ph->image('laboratory/' . $baseLaboratories[$i]['url'] . '.jpg', [
                        'class' => 'square-image',
                    ])
                        ->link_open('/laboratory/' . $baseLaboratories[$i]['url'])
                        ->tag('h4', $ph->localisedField($baseLaboratories[$i], 'name'), ['class' => 'department-name'])
                        ->tag_close('a'); ?>

                    <ul class="child-list-empty">
                        <li class="more-link">
                            <?php $ph->link(
                                '<strong>Подробнее</strong> <i class="glyphicon glyphicon-th-list"></i>',
                                '/laboratory/' . $baseLaboratories[$i]['url']
                            ) ?>
                        </li>
                    </ul>
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
