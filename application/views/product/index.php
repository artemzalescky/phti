<br><br><br><br>
<?php
$ph->include_css('product&uslugi.css');?>
<div class="container">
    <ol class="breadcrumb custom-breadcrumb">
        <li>
            <?php $ph->link($ph->lang->Label_FTI, '/') ?>
        </li>
        <li class="active">
            <?= $ph->lang->Label_Production ?>
        </li>
    </ol>
    <h2 class="title text-center"> <?= $ph->lang->Label_Production ?> </h2>

    <?php $this->renderTemplate('product-list') ?>
</div>