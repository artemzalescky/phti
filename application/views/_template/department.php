<?php $ph->include_css('title.css') ?>
<?php $ph->include_css('department.css') ?>
<br><br><br>

<div class="container marketing">
    <br/>
    <h2 class="title text-center">Научные центры и отделы</h2>

    <div class="row">
        <?php foreach ($mainDepartments as $mainDepartment){ ?>
        <div class="col-lg-4 box-container">
            <div class="box">
                    <?php $ph->image('department/'.$mainDepartment['url'].'.jpg', [
                        'class' => 'imageCube',
                    ]);?>
                <h2 class="title-class"><?=$mainDepartment['nameRu']?></h2>
                <ul class="block-list">
                <!-- Определяем количество лабораторий в данном департаменте -->
                    <li>
                        <a href="#" class="catalog-short-description">
                          <?php  if (!empty($mainDepartment['nameRu'])) {
                            $ph->cut_text('Сектор системного проектирования и математического моделирования', 40)
                            ->text('...');
                            }
                          ?>

                            <i class="glyphicon glyphicon-menu-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" >Сектор разработки программного... <i class="glyphicon glyphicon-menu-right"></i></a>
                    </li>
                    <li>
                        <a href="#">Лаборатория разработки НТД...<i class="glyphicon glyphicon-menu-right"></i></a>
                    </li>
                    <li class="more">
                        <a href="#" >Подробнее <i class="glyphicon glyphicon-th-list"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
</div>