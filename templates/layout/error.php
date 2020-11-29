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
</head>
<body>
<?= $this->fetch('top'); ?>
<div class="wrapper">

    <main id="main" class="main">
        <div id="main-content" class="content container">
            <?= $this->fetch('content'); ?>
        </div>
    </main>

</div>
</body>
</html>
