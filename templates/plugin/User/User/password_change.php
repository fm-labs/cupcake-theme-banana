<?php
$this->extend('base');
$this->assign('title', __('Change password'));
?>
<div class="view-auth">
    <h1><?= __('Change password'); ?></h1>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="login-box box-form">
        <div class="login-body">
            <?php echo $this->Form->create($user); ?>
            <?= $this->Form->control('password0', [
                //'label' => __('Current password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __('Enter current password')
            ]); ?>
            <?= $this->Form->control('password1', [
                //'label' => __('New password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __('Enter new password')
            ]); ?>
            <?= $this->Form->control('password2', [
                //'label' => __('Repeat password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __('Repeat new password')
            ]); ?>
            <?= $this->Form->submit(__('Change password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <p>
        <?= $this->Html->link(__('Back to settings?'), \Cake\Core\Configure::read('User.Pages.settings')); ?>
    </p>
</div>
