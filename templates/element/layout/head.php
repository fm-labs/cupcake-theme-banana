<?= $this->Html->charset() ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index,follow">
<meta name="mobile-web-app-capable" content="yes">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title><?= $this->fetch('title'); ?></title>
<?= $this->Html->meta('icon') ?>
<?= $this->fetch('meta'); ?>

<?= $this->Html->css('/libs/bootstrap/css/bootstrap'); ?>
<?= $this->Html->css('common'); ?>
<?= $this->fetch('css'); ?>

<?= $this->Html->script('/libs/jquery/jquery.min'); ?>
<?= $this->Html->script('/libs/jquery.scrollto/jquery.scrollTo.min'); ?>
<?= $this->Html->script('/libs/bootstrap/js/bootstrap'); ?>
<?= $this->fetch('headjs'); ?>

