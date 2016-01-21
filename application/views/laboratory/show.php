

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

   <!--Вывод общей инормации, контактов, руководителей-->
<?php

if (!empty($currentLaboratory)) {
    $ph->tag('h4', $ph->localisedField($currentLaboratory, 'name'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentLaboratory, 'desсription'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentLaboratory, 'contact'), ['class' => 'department-name']);
}
?>