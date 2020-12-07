<!DOCTYPE html>
<html lang="<?= Cake\I18n\I18n::getLocale(); ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $this->fetch('title'); ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta'); ?>

    <?= $this->Html->css('/libs/bootstrap/css/bootstrap'); ?>
    <?= $this->Html->css('frontend'); ?>
    <?= $this->fetch('css'); ?>

    <?= $this->Html->script('/libs/jquery/jquery.min'); ?>
    <?= $this->Html->script('/libs/jquery.scrollto/jquery.scrollTo.min'); ?>
    <?= $this->fetch('headjs'); ?>

    <?= $this->fetch('google_analytics'); ?>
</head>
<body>
<?= $this->fetch('top'); ?>
<div class="wrapper">
    <header id="page-header" class="header top-header">
        <?= $this->fetch('header', $this->element('layout/default/header')); ?>
    </header>

    <main id="main" class="main">
        <div id="main-flash" class="flash container">
            <?= $this->Flash->render(); ?>
            <?= $this->Flash->render('auth'); ?>
            <?= $this->fetch('flash'); ?>
        </div>
        <div id="main-content" class="content container">
            <?= $this->fetch('content'); ?>
        </div>
    </main>

    <footer id="page-footer" class="footer">
        <?= $this->fetch('footer', $this->element('layout/default/footer')); ?>
    </footer>
</div>
<?= $this->fetch('bottom'); ?>
<?= $this->fetch('script'); ?>
</body>
</html>
