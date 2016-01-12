
<!-- Fixed navbar -->
<div id="top-menu" class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <?php $ph->image_link('logo_145.png', '/', ['alt' => 'phti.by'], [
                'class' => 'navbar-brand',
                'data-src' => 'holder.js/140x140'
            ]) ?>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active">
                    <?php $ph->link('Главная', '/') ?>
                </li>
                <li>
                    <?php $ph->link('Новости', '/news') ?>
                </li>
                <li>
                    <?php $ph->link('Научные центры и отделы', '/department') ?>
                </li>
                <li>
                    <?php $ph->link('Лаборатории', '/laboratory') ?>
                </li>
                <li>
                    <?php $ph->link('Наша продукция', '/product') ?>
                </li>
                <li>
                    <?php $ph->link('Контакты', '/contacts') ?>
                </li>
                <li>
                    <?php $ph->link('О ФТИ', '/about') ?>
                </li>
                            </ul>
        </div>
    </div>
</div>

<!-- динамическое подменю Каталога -->
<!--                <li id="catalog-menu-item" class="dropdown">-->
<!--                    --><?php
//                        $ph->link('Каталог <b class="caret"></b>', 'catalog', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown']);
//                        if (!empty($mainCatalogs)) {
//                            $ph->tag_open('ul', ['class' => 'dropdown-menu', 'id' => 'catalog-dropdown-menu']);
//                            foreach ($mainCatalogs as $mainCatalog) {
//                                $ph->tag_open('li');
//                                $ph->link($mainCatalog['name'], '/catalog/' . $mainCatalog['url']);
//                                $ph->tag_close('li');
//                            }
//                            $ph->tag_close('ul');
//                        }
//                    ?>
<!--                </li>-->