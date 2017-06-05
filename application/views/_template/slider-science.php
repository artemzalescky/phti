<?php $ph->include_css('slider-science.css') ?>


<div class="slider-box-container-science" data-type="background" data-speed="10" class="pages">
    <div class="container container-science">
            <!--Наука-->
            <br><br>
            <div style="z-index: 9999" class="main-circle-container">
                <div class="science img-science img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science, '/department');?>
                    </p>
                </div>
            </div>
            <div class="little-circle-container">
                <!--КОНФЕРЕНЦИИ-->
                <div class="little-circle science-little img-conferences-circle ">
                    <p>
                        <a href="#conference" class="conference"><?= $ph->lang->TopMenu_Science_1 ?> </a>
                    </p>
                </div>
                <!--КОНКУРСЫ-->
                <div class="little-circle science-little img-konkurs-circle img-responsive" >
                    <p>
                        <a href="#konkursy" class="konkursy"><?= $ph->lang->TopMenu_Science_2 ?> </a>
                    </p>
                </div>
                <!--ПУБЛИКАЦИИ И МОНОГРАФИИ-->
                <div class="little-circle science-little img-monography-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <a href="#publication_and_monography" class="publication_and_monography"><?= $ph->lang->TopMenu_Science_3 ?> </a>
                    </p>
                </div>
                <!--СОВЕТ ПО ЗАЩИТЕ ДИССЕРТАЦИЙ-->
                <div class="little-circle science-little img-science-sovet-circle img-responsive" >
                    <p style="margin-top: 107px">
                        <?php $ph->link($ph->lang->TopMenu_Science_4, '/science/sovet-nayki');?>
                    </p>
                </div>
                <!--МЕЖДУНАРОДНЫЕ ПРОЕКТЫ-->
                <div class="little-circle science-little img-international-project-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <?php $ph->link($ph->lang->TopMenu_Science_5, '/science/show');?>
                    </p>
                </div>
                <!--ГОСУДАРСТВЕННЫЕ ПРОГРАММЫ-->
                <div class="little-circle science-little img-gos-program-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <a href="#gos_program" class="gos_program"><?= $ph->lang->TopMenu_Science_6 ?> </a>
                    </p>
                </div>
            </div>
    </div>

    <ul style="display: none">
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science, '/department');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_1, '/conference');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_2, '/');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_3, '/');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_4, '/');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_5, '/');?>
        </li>
        <li>
            <?php $ph->link($ph->lang->TopMenu_Science_6, '/');?>
        </li>

    </ul>
</div>

<script>
    var divs = document.getElementsByClassName('little-circle');
    var delta = Math.PI * 2 / divs.length;
    var x = 0, y = 0, angle = 0;

    for (var i = 0; i < divs.length; i++) {
        divs[i].style.position = 'absolute';
        divs[i].style.left =  300 * Math.cos(angle) + 'px';
        divs[i].style.top = 260 * Math.sin(angle) + 'px';

        angle += delta;
    }
</script>

