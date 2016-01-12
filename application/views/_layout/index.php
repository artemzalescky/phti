<!DOCTYPE html>
<html>
<head>
    <title> Физико-Технический Институт НАН Беларуси </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        $ph->include_system_css('/themes/bootstrap.min.css')
        ->include_system_css('glyphicon.css')
        ->include_system_js_lib('jquery-2.1.4.min.js')
        ->include_system_js_lib('bootstrap-3.3.5-dist/bootstrap.min.js')

        /*Header*/
        ->include_css('header/header.css')
        ->include_css('header/bootstrap-theme.css')

        /*Footer*/
        ->include_css('footer/footer.css')

        /*Carousel*/
        ->include_css('carousel.css')

        /*index*/
        ->include_css('catalog.css')
        ->include_css('logo.css')
    ?>
</head>

<body>

<?php $this->renderTemplate('header') ?>

<hr>
<?php //var_dump($baseLaboratories) ?>

<?php $this->renderTemplate('department')?>

<?php $this->renderTemplate('footer') ?>

</body>
</html>