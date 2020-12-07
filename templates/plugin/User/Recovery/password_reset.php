<?php
$this->extend('/base');
// breadcrumbs
$this->loadHelper('Breadcrumbs');
$this->Breadcrumbs->add(__('Login'), \Cake\Core\Configure::read('User.Pages.login'));
$this->Breadcrumbs->add(__('Reset account password'));

// no robots
$this->Html->meta('robots', 'noindex,nofollow', ['block' => true]);
?>
<?php $this->assign('title', __('Password recovery')); ?>
<div class="view-auth">

    <h1><?= __('Reset password'); ?></h1>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="login-box box-form">
        <div class="login-body">
            <?= $this->Form->create($user); ?>
            <?= $this->Form->hidden('password_reset_code'); ?>
            <?= $this->Form->control('username', [
                'label' => __('Email'),
                'placeholder' => __('Your email address'),
                'required' => true,
            ]); ?>
            <?= $this->Form->control('password1', [
                'label' => __('New password'),
                'type' => 'password',
                'required' => true,
                'autocomplete' => 'off',
            ]); ?>
            <?= $this->Form->control('password2', [
                'label' => __('Repeat password'),
                'type' => 'password',
                'required' => true,
                'autocomplete' => 'off',
            ]); ?>
            <?= $this->Form->submit(__('Reset password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?= $this->Html->link(__('Cancel'), \Cake\Core\Configure::read('User.Pages.login'), ['class' => 'btn btn-default btn-block']); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
