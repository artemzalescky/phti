<nav id="top-menu" class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu-content">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php $ph->image_link('logo.png', '/', [
                'alt' => 'phti.by',
                'id' => 'top-menu-logo',
                'class' => 'navbar-brand'
            ], [
                'id' => 'top-menu-logo-holder',
            ]) ?>
        </div>

        <div class="collapse navbar-collapse" id="top-menu-content">
            <ul class="nav navbar-nav">
                <li class="active">
                    <?php $ph->link($ph->lang->TopMenu_Home, '/') ?>
                </li>
                <li> <?php $ph->link($ph->lang->TopMenu_News, '/news') ?> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $ph->lang->TopMenu_Structure ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <?php $ph->link($ph->lang->TopMenu_Structure_Departments, '/department') ?> </li>
                        <li class="divider"></li>
                        <li> <?php $ph->link($ph->lang->TopMenu_Structure_Laboratories, '/laboratory') ?> </li>
                    </ul>
                </li>
                <li> <?php $ph->link($ph->lang->TopMenu_Production, '/product') ?> </li>
                <li> <?php $ph->link($ph->lang->TopMenu_Contacts, '/contacts') ?> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $ph->lang->TopMenu_About ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <?php $ph->link($ph->lang->TopMenu_About_Management, '/managment') ?> </li>
                        <li class="divider"></li>
                        <li> <?php $ph->link($ph->lang->TopMenu_About_History, '/about') ?> </li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EN / RU <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <?php $ph->system_link('English', '/locale/change/en') ?> </li>
                        <li class="divider"></li>
                        <li> <?php $ph->system_link('Русский', '/locale/change/ru') ?> </li>
                    </ul>
                </li>
            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?= $ph->lang->TopMenu_SearchFormPlaceHolder ?>">
                </div>
                <button type="submit" class="btn btn-default btn-sm"><?= $ph->lang->Button_Search ?></button>
            </form>
        </div>
    </div>
</nav>