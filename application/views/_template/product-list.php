<?php $ph->include_css('product-list.css') ?>

<div id="product-list">
    <?php foreach ($products as $product) { ?>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <?php $ph->image("product/{$product['id']}.jpeg" , ['class' => 'product-image']) ?>
            </div>
            <div class="col-md-9">
                <h3 class="product-name">
                    <?php $ph->link($ph->localisedField($product, 'name'), "/product/{$product['url']}") ?>
                </h3>
                <p>
                    <?= $ph->localisedField($product, 'shortDescription') ?>
                </p>
            </div>
        </div>
    <?php   } ?>
</div>