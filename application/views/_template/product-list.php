<?php $ph->include_css('product-list.css') ?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <div class="serviceBox-container">
                        <div class="service-icon">
                            <!--<i class="glyphicon glyphicon-wrench"></i>-->
                            <?php $ph->link_open("/product/{$product['url']}")
                                ->image("product/icons/{$product['id']}.png" , ['class' => 'product-image'])
                                ->link_close() ?>
                        </div>
                        <br>
                        <div class="service-Content">
                            <h3 class="title">
                                <?php $ph->link($ph->localisedField($product, 'name'), "/product/{$product['url']}") ?>
                            </h3>
                            <p class="description">
                                <?= $ph->localisedField($product, 'shortDescription') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php   } ?>
    </div>
</div>


