<!doctype html>
<html lang="<?= Cake\I18n\I18n::getLocale(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->fetch('meta'); ?>

    <title><?= $this->fetch('title'); ?></title>

    <?= $this->Html->css('/theme_bootstrap/libs/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Custom styles for this template -->
    <?= $this->Html->css('blog.css'); ?>
    <?= $this->fetch('css'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= $this->fetch('scripts'); ?>
</head>

<body>

<?= $this->element('layout/blog/header'); ?>

<div class="container">

    <?php if ($this->getRequest()->getSession()->read('Auth.User')): ?>
        <?= __d('user', 'You are logged in'); ?> | <?= $this->Html->link(__d('user', 'Logout'), ['_name' => 'user:logout']); ?>
    <?php endif; ?>

    <div class="blog-header">
        <h1 class="blog-title"><?= h(\Cake\Core\Configure::read('Theme.siteTitle', '{{Theme.siteTitle}}')); ?></h1>
        <p class="lead blog-description"><?= h(\Cake\Core\Configure::read('Theme.siteSlogan', '{{Theme.siteSlogan}}')); ?></p>
    </div>

    <div class="blog-messages">
        <?= $this->Flash->render(); ?>
    </div>

    <div class="row">

        <div class="col-sm-9 blog-main">
            <?= $this->fetch('content'); ?>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 blog-sidebar">
            <?= $this->element('layout/blog/sidebar'); ?>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<?= $this->element('layout/blog/footer'); ?>

<?= $this->Html->script('/theme_bootstrap/libs/jquery/jquery.min.js'); ?>
<?= $this->Html->script('/theme_bootstrap/libs/bootstrap/js/bootstrap.min.js'); ?>
</body>
</html>
