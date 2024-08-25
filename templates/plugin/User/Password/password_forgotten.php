<?php
$this->extend('/base');
$this->assign('title', __d('user','Password recovery'));
$form = $this->get('form');
?>
<div class="view-auth">
    <h1><?= __d('user','Forgot password?'); ?></h1>
    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <div class="box-form box-form-shadow">
        <div class="box-body">
            <p>
                <?= __d('theme_banana', 'Enter your email address to request a new password.'); ?>
                <?= __d('theme_banana', 'Instructions on how to reset your password will follow via email.'); ?>
            </p>
            <?= $this->Form->create($form); ?>
            <div class="pb-3">
                <?= $this->Form->control('username', [
                    'class' => 'form-control',
                    'required' => true,
                    'type' => 'text',
                    'placeholder' => __d('user', 'Username'),
                    'label' => false,
                ]); ?>
            </div>
            <?= $this->Form->submit(__d('user', 'Request new password'), ['class' => 'btn btn-primary btn-block']); ?>
            <?= $this->Form->end(); ?>
            <p>
                <?= $this->Html->link(__d('theme_banana', 'Back to login?'), ['_name' => 'user:login']); ?>
            </p>
        </div>
    </div>
</div>
