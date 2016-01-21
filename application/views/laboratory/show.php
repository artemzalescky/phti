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

<?php

// Вывод общей инормации, контактов, руководителей
if (!empty($currentLaboratory)) {
    $ph->tag('h4', $ph->localisedField($currentLaboratory, 'name'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentLaboratory, 'desсription'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentLaboratory, 'contact'), ['class' => 'department-name']);
}

// Вывод продукции
if (!empty($products)) {
    $ph->single_tag('hr')
        ->tag('h2', $ph->lang->Label_Production, ['class' => 'text-center title']);
    $this->renderTemplate('product-list');
}
