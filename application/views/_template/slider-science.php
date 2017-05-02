<?php $ph->include_css('slider-science.css') ?>


<div style="margin-top: 40px;  " class="slider-box-container-science">
    <div class="container">
            <br><br>
            <div style="z-index: 9999" class="main-circle-container">
                <div class="science img-science img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science, '/department');?>
                    </p>
                </div>
            </div>
            <div class="little-circle-container">
                <div class="little-circle science-little img-science-circle">
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_1, '/science/show');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_2, '/science/show');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <?php $ph->link($ph->lang->TopMenu_Science_3, '/science/show');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive" >
                    <p style="margin-top: 90px">
                        <?php $ph->link($ph->lang->TopMenu_Science_4, '/science/sovet-nayki');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <?php $ph->link($ph->lang->TopMenu_Science_5, '/science/show');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p style="margin-top: 108px">
                        <?php $ph->link($ph->lang->TopMenu_Science_6, '/science/show');?>
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

