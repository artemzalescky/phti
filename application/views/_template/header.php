<?php $ph->include_css('header.css') ?>
<style>
    #top-menu-logo{
        width: 300px;
        display:block;
        margin-top: 6px;

    }
    .navbar-toggle{
        background: #033071 !important;
    }
    #top-menu{
        display: block;
        position: relative;
        margin: 0px auto;
    }
</style>
<div class="header-menu-container">
<div class="container" style="margin: 0 auto;">
    <nav id="top-menu" class="navbar navbar-default" >
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left: 10px">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu-content">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php $ph->image_link('main/logo_mini.png', '/', [
                    'alt' => 'phti.by',
                    'id' => 'top-menu-logo',
                    'class' => ''
                ], [
                    'id' => 'top-menu-logo-holder',
                ]) ?>
            </div>

            <div class="collapse navbar-collapse" id="top-menu-content">
                <ul class="nav navbar-nav">
                    <li> <?php $ph->link($ph->lang->TopMenu_Home, '/') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_Production, '/product') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_News, '/news') ?> </li>
                    <li> <?php $ph->link($ph->lang->TopMenu_Contacts, '/contacts') ?> </li>
                    <li> <?php $ph->link($ph->lang->Conference, '/conference') ?> </li>
                    <li class="dropdown">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?= strtoupper($ph->lang->getLang()) ?><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <?php $ph->system_link('English', '/locale/change/en') ?> </li>
                            <li class="divider"></li>
                            <li> <?php $ph->system_link('Русский', '/locale/change/ru') ?> </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
</div>