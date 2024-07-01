<?php
$this->extend('/base');
$this->assign('title', __d('user','Password recovery'));
$form = $this->get('form');
?>
<div class="view-auth">
    <h1><?= __d('user','Forgot password?'); ?></h1>
    <p>
        <?= __d('user','Enter your email address to reset your password.'); ?>
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
                'placeholder' => __d('user','Enter your email address'),
                'label' => false,
            ]); ?>
            <?= $this->Form->submit(__d('user','Request new password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?= $this->Form->end(); ?>
            <p>
                <?= $this->Html->link(__d('user','Back to login?'), ['_name' => 'user:login']); ?>
            </p>
        </div>
    </div>
</div>
