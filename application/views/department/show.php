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

<?php $this->renderTemplate('department'); ?>
