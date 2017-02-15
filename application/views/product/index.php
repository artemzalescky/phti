<br><br>
<ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <li class="active">
        <?= $ph->lang->Label_Production ?>
    </li>
</ol>

<hr>

<h2 class="title text-center"> <?= $ph->lang->Label_Production ?> </h2>

<?php $this->renderTemplate('product-list') ?>