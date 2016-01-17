<!DOCTYPE html>
<html>
<head>
    <title> Физико-Технический Институт НАН Беларуси </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $ph->include_system_css('/themes/flatly-bootstrap.min.css')
        ->include_system_css('glyphicon.css')
        ->include_system_js_lib('jquery-2.1.4.min.js')
        ->include_system_js_lib('bootstrap-3.3.5-dist/bootstrap.min.js')

        /*Header*/
        ->include_css('header/header.css')

        /*Footer*/
        ->include_css('footer/footer.css')

        /*Extra*/
        ->include_css('title.css')
    ?>
</head>

<body>

<?php $this->renderTemplate('header') ?>

<div class="container">
    <hr>
    <?php $this->renderContent() ?>
    <hr>
</div>

<?php $this->renderTemplate('footer') ?>

</body>
</html>