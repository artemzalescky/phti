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
                    <?php $ph->link('Главная', '/') ?>
                </li>
                <li> <?php $ph->link('Новости', '/news') ?> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Структура <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <?php $ph->link('Научные центры и отделы', '/department') ?> </li>
                        <li class="divider"></li>
                        <li> <?php $ph->link('Лаборатории', '/laboratory') ?> </li>
                    </ul>
                </li>
                <li> <?php $ph->link('Наша продукция', '/production') ?> </li>
                <li> <?php $ph->link('Контакты', '/contacts') ?> </li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">О ФТИ <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> <?php $ph->link('Руководство ФТИ', '/managment') ?> </li>
                </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EN / RU <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li> <?php $ph->link('English', '#') ?> </li>
                        <li class="divider"></li>
                        <li> <?php $ph->link('Русский', '#') ?> </li>
                    </ul>
                </li>
            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Строка для поиска">
                </div>
                <button type="submit" class="btn btn-default">Поиск</button>
            </form>


        </div>
    </div>
</nav>