<ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <li class="active">
        <?= $ph->lang->Label_Laboratories ?>
    </li>
</ol>

<hr>

<?php $this->renderTemplate('laboratory');
