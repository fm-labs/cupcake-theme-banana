<?php

use Cake\Core\Configure;

?>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="mobile-web-app-capable" content="yes">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $this->fetch('title'); ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta'); ?>

    <?= $this->Html->css('/libs/bootstrap/css/bootstrap'); ?>
    <?= $this->Html->css('login'); ?>
    <?= $this->fetch('css'); ?>

    <?= $this->Html->script('/libs/jquery/jquery.min'); ?>
    <?= $this->fetch('headjs'); ?>
</head>
<body class="user-layout">
<div class="wrapper">
    <header class="container">
        <div class="logo">
            <?=
            Configure::read('Banana.Logo.url') ? $this->Html->image(
                Configure::read('Banana.Logo.url'),
                [
                    'alt' => Configure::read('Banana.Logo.alt'),
                    'height' => '75',
                ],
            ) : '';
            ?>
        </div>
    </header>

    <div class="container">
        <?= $this->Flash->render(); ?>
        <?= $this->Flash->render('auth'); ?>
    </div>

    <main class="container">
        <?= $this->fetch('content'); ?>
    </main>

    <footer class="hidden-xs">
        <?= '' // $this->element('Layout/footer_nav'); ?>
    </footer>
</div>
<?= $this->fetch('script'); ?>
</body>
</html>
