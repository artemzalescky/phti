<ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <?php foreach ($pathToDepartment as $part) {
        if ($part['id'] == $currentDepartment['id']) {
            $ph->tag('li', $part['nameRu'], ['class' => 'active']);
        } else {
            $ph->tag_open('li')
                ->link($part['nameRu'], $part['fullUrl'])
                ->tag_close('li');
        }
    } ?>
</ol>

<hr>

<?php $this->renderTemplate('department'); ?>
