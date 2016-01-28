<?php $ph->include_css('department.css') ?>

<ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <?php foreach ($pathToDepartment as $part) {
        if ($part['id'] == $currentDepartment['id']) {
            $ph->tag('li', $ph->localisedField($part, 'name'), ['class' => 'active']);
        } else {
            $ph->tag_open('li')
                ->link($ph->localisedField($part, 'name'), $part['fullUrl'])
                ->tag_close('li');
        }
    } ?>
</ol>

<hr>

<!--Вывод общей инормации, контактов, руководителей-->
<?php
if (!empty($currentDepartment)) {
    $ph->tag('h4', $ph->localisedField($currentDepartment, 'name'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'desсription'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'manager'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'contact'), ['class' => 'department-name']);
}

if (!empty($departmentList)) {
    $this->renderTemplate('department');
}

if (!empty($products)) {
    $ph->single_tag('hr')
        ->tag('h2', $ph->lang->Label_Production, ['class' => 'text-center title']);
    $this->renderTemplate('product-list');
}

if (empty($products) && empty($departmentList) && empty($currentDepartment)) {
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'name'), ['class' => 'active']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'desсription'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'manager'), ['class' => 'department-name']);
    $ph->tag('h5', $ph->localisedField($currentDepartment, 'contact'), ['class' => 'active']);
}
