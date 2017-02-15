<?php $ph->include_css('header.css') ?>
<style>
    #top-menu-logo{
        width: 130px;

    }
</style>
<div class="header-menu-container">
<div class="container">
    <nav id="top-menu" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left: 10px">

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

                    <li class="dropdown">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RU<span class="caret"></span></a>
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