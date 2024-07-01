<?php
$this->extend('/base');
$this->assign('title', __d('user','Change password'));
?>
<div class="view-auth">
    <h1><?= __d('user','Change password'); ?></h1>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="login-box box-form">
        <div class="login-body">
            <?php echo $this->Form->create($user); ?>
            <?= $this->Form->control('password0', [
                //'label' => __d('user','Current password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __d('user','Enter current password')
            ]); ?>
            <?= $this->Form->control('password1', [
                //'label' => __d('user','New password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __d('user','Enter new password')
            ]); ?>
            <?= $this->Form->control('password2', [
                //'label' => __d('user','Repeat password'),
                'label' => false,
                'type' => 'password',
                'required' => true,
                'placeholder' => __d('user','Repeat new password')
            ]); ?>
            <?= $this->Form->submit(__d('user','Change password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <p>
        <?= $this->Html->link(__d('user','Back to settings?'), \Cake\Core\Configure::read('User.Pages.settings')); ?>
    </p>
</div>
