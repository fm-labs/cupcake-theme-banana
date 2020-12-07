<?php
$this->extend('/base');
$this->assign('title', __('Password recovery'));
$form = $this->get('form');
?>
<div class="view-auth">
    <h1><?= __('Forgot password?'); ?></h1>
    <p>
        <?= __('Enter your email address to reset your password.'); ?>
    </p>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="login-box box-form">
        <div class="login-message">
            <?php echo $this->Flash->render('auth'); ?>
        </div>
        <div class="login-body">
            <?= $this->Form->create($form, ['novalidate' => 'novalidate']); ?>
            <?= $this->Form->control('username', [
                'required' => true,
                'type' => 'email',
                'placeholder' => __('Enter your email address'),
                'label' => false,
            ]); ?>
            <?= $this->Form->submit(__('Request new password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?= $this->Form->end(); ?>
            <p>
                <?= $this->Html->link(__('Back to login?'), ['_name' => 'user:login']); ?>
            </p>
        </div>
    </div>
</div>
