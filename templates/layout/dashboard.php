<?php $this->loadHelper('Breadcrumbs'); ?>
<?php $this->Html->css('dashboard.min', ['block' => true]); ?>
<!DOCTYPE html>
<html lang="<?= Cake\I18n\I18n::getLocale(); ?>">
<head>
    <?= $this->Html->charset() ?>
    <title><?= $this->fetch('title'); ?></title>
    <?= $this->element('layout/head'); ?>
</head>
<body class="has-sidebar">
<div id="wrapper">

    <?= $this->element('Dashboard/sidebar'); ?>

    <div id="content">
        <?= $this->element('Dashboard/user_notice'); ?>
        <?= $this->element('Dashboard/breadcrumbs'); ?>
        <?= '' //@todo $this->element('Dashboard/search'); ?>

        <div id="header">
            <?php echo $this->fetch('header'); ?>
        </div>

        <div id="toolbar">
            <?php echo $this->fetch('toolbar'); ?>
        </div>

        <div id="flash-messages">
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
        </div>

        <main id="main" class="container-fluid">

            <?php echo $this->fetch('content'); ?>
        </main>

        <?php if (\Cake\Core\Configure::read('debug')) : ?>
            <div class="container-fluid">
            <?php // debug($this->request->session()->id()); ?>
            <?php //debug($this->request->session()->read()); ?>
            </div>
        <?php endif; ?>

        <footer id="footer" class="container-fluid">
            <?= $this->element('layout/footer'); ?>
        </footer>

    </div>

</div>
<?= '' // $this->element('Layout/scripts'); ?>
<?= '' // $this->Html->script('theme_banana'); ?>
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
