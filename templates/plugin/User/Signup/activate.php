<?php
$this->extend('/base');
$this->assign('title', __d('user','Activate account'));
?>
<div class="view-auth">

    <h1><?= __d('user','Activate account'); ?></h1>
    <p>
        <?= __d('user','An activation link has been sent to your email upon registration. Please check your inbox.'); ?>
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
                'placeholder' => __d('user','Email address')
            ]); ?>
            <?= $this->Form->control('email_verification_code', [
                'label' => false,
                'type' => 'text',
                'placeholder' => __d('user','Activation code')
            ]); ?>
            <?= $this->Form->submit(__d('user','Activate'), ['class' => 'btn btn-block btn-primary']); ?>
            <?= $this->Form->end(); ?>
        </div>
    </div>
    <div class="">
        <p>
            <?= $this->Html->link(__d('user','Back to login?'), \Cake\Core\Configure::read('User.Pages.login')); ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?= $this->Html->link(__d('user','Contact support?'), \Cake\Core\Configure::read('User.Pages.contact')); ?>
        </p>
    </div>

</div>
