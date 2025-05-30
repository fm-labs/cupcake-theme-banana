<?php
$this->extend('/base');
// breadcrumbs
$this->loadHelper('Breadcrumbs');
$this->Breadcrumbs->add(__d('user','Login'), \Cake\Core\Configure::read('User.Pages.login'));
$this->Breadcrumbs->add(__d('user','Reset account password'));

// no robots
$this->Html->meta('robots', 'noindex,nofollow', ['block' => true]);
?>
<?php $this->assign('title', __d('user','Password recovery')); ?>
<div class="view-auth">

    <h1><?= __d('user','Reset password'); ?></h1>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="box-form box-form-shadow">
        <div class="box-body">
            <?= $this->Form->create($user); ?>
            <?= $this->Form->hidden('password_reset_code'); ?>
            <?= $this->Form->control('username', [
                'label' => __d('user', 'Username'),
                'placeholder' => __d('user', 'Your username'),
                'required' => true,
                'class' => 'form-control',
            ]); ?>
            <?= $this->Form->control('password1', [
                'label' => __d('user','New password'),
                'type' => 'password',
                'required' => true,
                'autocomplete' => 'off',
                'class' => 'form-control',
            ]); ?>
            <?= $this->Form->control('password2', [
                'label' => __d('user','Repeat password'),
                'type' => 'password',
                'required' => true,
                'autocomplete' => 'off',
                'class' => 'form-control',
            ]); ?>
            <?= $this->Form->submit(__d('user','Reset password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?= $this->Html->link(__d('user', 'Cancel'), ['_name' => 'user:login'], ['class' => 'btn btn-default btn-block text-center']); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
