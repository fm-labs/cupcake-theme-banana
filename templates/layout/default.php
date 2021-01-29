<?php
/**
 * @var \Cake\View\View $this;
 */
?>
<!DOCTYPE html>
<html lang="<?= Cake\I18n\I18n::getLocale(); ?>">
<head>
    <?= $this->Html->charset() ?>
    <title><?= $this->fetch('title'); ?></title>
    <?= $this->element('layout/head'); ?>
</head>
<body>
<?= $this->fetch('top'); ?>
<div class="wrapper">
    <header id="page-header" class="header top-header">
        <?= $this->fetch('header', $this->element('layout/header')); ?>
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

    <footer id="page-footer" class="footer fixed-bottom">
        <?= $this->fetch('footer', $this->element('layout/footer')); ?>
    </footer>
</div>
<?= $this->fetch('bottom'); ?>
<?= $this->fetch('script'); ?>
</body>
</html>
