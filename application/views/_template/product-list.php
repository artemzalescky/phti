<?php //$ph->include_css('product-list.css') ?>

<style>
    .serviceBox{
        border: 1px solid #ededed;
        padding: 30px 30px 30px 90px;
        position: relative;
        transition: all 0.5s ease 0s;
    }
    .serviceBox:hover{
        border-color: #234e7b;
    }
    .serviceBox:before,
    .serviceBox:after{
        content: "";
        display: block;
        width: 50px;
        height: 5px;
        background: #234e7b;
        position: absolute;
        left: 0;
        opacity: 0;
        transition: all 0.5s ease 0s;
    }
    .serviceBox:before{
        top: -3px;
    }
    .serviceBox:after{
        bottom: -3px;
    }
    .serviceBox:hover:before,
    .serviceBox:hover:after{
        left: 40px;
        opacity: 1;
    }
    .serviceBox .service-icon{
        display: inline-block;
        position: absolute;
        top: 12%;
        left: 23px;
        font-size: 45px;
        color: #234e7b;
        opacity: 0.3;
        transition: all 0.5s ease-in 0s;
    }
    .serviceBox:hover .service-icon{
        opacity: 1;
    }
    .service-icon{

    }
    .serviceBox .title{
        font-size: 16px;
        font-weight: 700;
        color: #234e7b;
        margin-bottom: 15px;
    }
    .serviceBox .description{
        font-size: 13px;
        color: #666;
        line-height: 20px;
    }
    @media only screen and (max-width: 990px){
        .serviceBox{ margin-bottom: 30px; }
    }
    .serviceBox{
        min-height: 400px;
        margin: 10px auto;
    }
</style>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="glyphicon glyphicon-wrench"></i>
                       <?php //$ph->link_open("/product/{$product['url']}")
                            //->image("product/{$product['id']}.jpeg" , ['class' => 'product-image'])
                            //->link_close() ?>
                    </div>
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
        <?php   } ?>
    </div>
</div>


