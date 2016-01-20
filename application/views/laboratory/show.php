<ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <li>
        <?php $ph->link($ph->lang->Label_Laboratories, '/laboratory') ?>
    </li>
    <li class="active">
        <?= $ph->localisedField($currentLaboratory, 'name') ?>
    </li>
</ol>

<hr>

<?php var_dump($currentLaboratory); ?>

