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
            <?php if (!empty($ph->localisedField($currentProduct, 'shortDescription'))) {
                $ph->tag_open('blockquote')
                    ->tag_open('p')
                    ->text($ph->localisedField($currentProduct, 'shortDescription'))
                    ->tag_close('p')
                    ->tag_close('blockquote')
                    ->single_tag('hr');
            }
            if (!empty($parentDepartment)) {
                $ph->tag_open('div', ['style' => 'padding-left: 25px']);
                $ph->link($ph->localisedField($parentDepartment, 'name'), "/department/{$parentDepartment['url']}")
                    ->single_tag('br');
                $departmentContacts = $ph->localisedField($parentDepartment, 'contact');
                if (!empty($departmentContacts)) {
                    $ph->text($departmentContacts)
                        ->single_tag('hr');
                }
                $ph->tag_close('div');
            }
            ?>
            <?php foreach ($currentProduct['extraFields'] as $i => $field) { ?>
                <?php if($i != 0) {
                    $ph->single_tag('hr');
                } ?>
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