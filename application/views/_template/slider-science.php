<?php $ph->include_css('slider-science.css') ?>

<div style="margin-top: 40px;  " class="slider-box-container-science">
    <div style="margin: 15px auto" class="container">
            <br><br>
            <div style="display:block; position: absolute; left: 508px; top:190px">
                <div class="science img-science img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science, '/department');?>
                    </p>
                </div>
            </div>
            <div class="little-circle-container">

                <div class="little-circle science-little img-science-circle" >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_1, '/');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_2, '/');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_3, '/');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive" >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_4, '/');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_5, '/');?>
                    </p>
                </div>
                <div class="little-circle science-little img-science-circle img-responsive " >
                    <p>
                        <?php $ph->link($ph->lang->TopMenu_Science_6, '/');?>
                    </p>
                </div>
            </div>
    </div>
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

