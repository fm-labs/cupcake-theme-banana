<?php $this->loadHelper('Breadcrumbs'); ?>
<!DOCTYPE html>
<html lang="<?= Cake\I18n\I18n::getLocale(); ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= $this->Html->meta('icon') ?>
    <title><?= $this->fetch('title'); ?></title>
    <?= $this->fetch('meta'); ?>

    <?= $this->Html->css('bootstrap'); ?>
    <?= $this->fetch('css'); ?>
    <?= $this->Html->css('dashboard.min.css'); ?>
    <!--
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    or
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');
    </style>
    -->
    <?= $this->Html->script('jquery-2.2.4.min.js'); ?>
    <?= $this->Html->script('bootstrap.js'); ?>
    <?= $this->fetch('headjs'); ?>
    <?= $this->fetch('google_analytics'); ?>
</head>
<body>
<div id="wrapper">

    <?= $this->element('Dashboard/sidebar'); ?>

    <div id="content">
        <?php //echo $this->element('Dashboard/search'); ?>

        <?php if ($this->fetch('breadcrumbs')) : ?>
            <?= $this->fetch('breadcrumbs'); ?>
        <?php else : ?>
        <div id="breadcrumbs">
            <nav>
            <?php
            $this->Breadcrumbs->prepend(__('Dashboard'), '/');
            echo $this->Breadcrumbs->render(['class' => 'nav-horizontal'], ['separator' => '&nbsp;>&nbsp;', 'class' => 'separator-item', 'innerAttrs' => ['class' => 'separator']]);
            ?>
            </nav>
        </div>
        <?php endif; ?>

        <div id="header">
            <?php echo $this->fetch('header'); ?>
        </div>

        <div id="toolbar">
            <?php echo $this->fetch('toolbar'); ?>
        </div>

        <main id="main" class="container-fluid">
            <?php
            /**
             * User dashboard notice
             */
            echo $this->element('Dashboard/user_notice');
            ?>

            <div id="flash-messages">
                <?php echo $this->Flash->render(); ?>
            </div>

            <?php echo $this->fetch('content'); ?>
        </main>

        <?php if (\Cake\Core\Configure::read('debug')) : ?>
            <div class="container-fluid">
            <?php // debug($this->request->session()->id()); ?>
            <?php //debug($this->request->session()->read()); ?>
            </div>
        <?php endif; ?>

        <footer id="footer" class="container-fluid">
            <?= $this->element('Layout/footer_nav'); ?>
        </footer>

    </div>

</div>
<?= '' // $this->element('Layout/scripts'); ?>
<?= '' // $this->Html->script('sportunion'); ?>
<?= $this->fetch('script'); ?>
<script>
    $sidebar = $('#sidebar');
    $(window).resize(function() {
        //console.log($(window).height());
        //$sidebar.height($(window).height());
        var $main = $('#main');
        var winHeight = $(window).height();
        var mainOffset = $main.offset().top;
        var footerHeight = $('#footer').outerHeight();
        //console.log(winHeight, mainOffset, footerHeight, winHeight - mainOffset - footerHeight);
        $main.css({ 'min-height': winHeight - mainOffset - footerHeight + 'px'});
    });
    $(document).ready(function() {
        $(window).trigger('resize');

        $('.sumo-select').SumoSelect();
    });
</script>
</body>
</html>
