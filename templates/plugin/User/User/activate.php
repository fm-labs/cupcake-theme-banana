<?php
$this->extend('base');
$this->assign('title', __('Activate account'));
?>
<div class="view-auth">

    <h1><?= __('Activate account'); ?></h1>
    <p>
        <?= __('An activation link has been sent to your email upon registration. Please check your inbox.'); ?>
    </p>

    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="login-box box-form">
        <div class="login-body">

            <?= $this->Form->create($user/*, ['context' => ['validator' => 'activate']]*/); ?>
            <?= $this->Form->control('email', [
                'label' => false,
                'type' => 'email',
                'required' => true,
                'placeholder' => __('Email address')
            ]); ?>
            <?= $this->Form->control('email_verification_code', [
                'label' => false,
                'type' => 'text',
                'placeholder' => __('Activation code')
            ]); ?>
            <?= $this->Form->submit(__('Activate'), ['class' => 'btn btn-block btn-primary']); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
    <div class="">
        <p>
            <?= $this->Html->link(__('Back to login?'), \Cake\Core\Configure::read('User.Pages.login')); ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?= $this->Html->link(__('Contact support?'), \Cake\Core\Configure::read('User.Pages.contact')); ?>
        </p>
    </div>

</div>
