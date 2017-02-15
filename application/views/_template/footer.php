<?php $ph->include_css('footer.css') ?>

<div class="navbar-relative-bottom row-fluid" id="footer">
    <div class="navbar-inner">
        <div class="container">
            <div class="navbar-logo">

                <?php $ph->image_link('main/facebook.png', '/', [
                    'alt' => 'facebook.com',
                    'id' => 'footer-logo',
                    'class' => 'navbar-brand'
                ], [
                    'id' => 'footer-menu-logo-holder',
                ]) ?>
                <?php $ph->image_link('main/insta.png', '/', [
                    'alt' => 'insta',
                    'id' => 'footer-logo',
                    'class' => 'navbar-brand'
                ], [
                    'id' => 'footer-menu-logo-holder',
                ]) ?>
                <?php $ph->image_link('main/linked.png', '/', [
                    'alt' => 'linked',
                    'id' => 'footer-logo',
                    'class' => 'navbar-brand'
                ], [
                    'id' => 'footer-menu-logo-holder',
                ]) ?>
            </div>
            <div class="collapse navbar-collapse" id="bottom-menu-content">
                <ul class="nav navbar-nav footer-nav" style="float: right">
                    <li> <?php $ph->link($ph->lang->TopMenu_Home, '/') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_Production, '/product') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_News, '/news') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_Contacts, '/contacts') ?> </li>
                </ul>

            </div>
        </div>
    </div>
</div>