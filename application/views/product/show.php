<?php
$ph->include_css('product-view.css');
$currentLang = $ph->lang->getLangCapitalised();
$defaultLang = $ph->lang->getDefaultLangCapitalised();
?>


    <ol class="breadcrumb custom-breadcrumb">
    <li>
        <?php $ph->link($ph->lang->Label_FTI, '/') ?>
    </li>
    <li>
        <?php $ph->link($ph->lang->Label_Production, '/product') ?>
    </li>
    <?php foreach ($pathToProduct as $pathPart) {
        if ($pathPart['id'] == $currentProduct['id']) {
            $ph->tag('li', $ph->localisedField($pathPart, 'name'), ['class' => 'active']);
        } else {
            $ph->tag_open('li')
                ->link($ph->localisedField($pathPart, 'name'), "/product/{$pathPart['url']}")
                ->tag_close('li');
        }
    } ?>
</ol>

<hr>

<div id="product-container">
    <h3><?= $ph->localisedField($currentProduct, 'name') ?></h3>

    <hr>

    <div class="row">
        <div class="col-md-5">
            <?php $ph->image("product/{$currentProduct['id']}.jpeg" , [
                'class' => 'product-image',
                'alt' => $ph->localisedField($currentProduct, 'name')
            ]) ?>
        </div>
        <div class="col-md-7">
            <blockquote>
                <p><?= $ph->localisedField($currentProduct, 'shortDescription') ?></p>
            </blockquote>
            <?php foreach ($currentProduct['extraFields'] as $field) { ?>
                <hr>
                <div class="row">
                    <div class="col-md-3 text-right">
                        <?= !empty($field["key$currentLang"]) ? $field["key$currentLang"] : $field["key$defaultLang"] ?>
                    </div>
                    <div class="col-md-9">
                        <?= !empty($field["value$currentLang"]) ? $field["value$currentLang"] : $field["value$defaultLang"] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php if (!empty($products)) {
    $ph->single_tag('hr')
        ->tag('h2', $ph->lang->Product_Label_Varieties, ['class' => 'text-center title']);
    $this->renderTemplate('product-list');
} ?>