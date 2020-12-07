<?php
$this->extend('/base');
$this->assign('title', __('Password recovery')); ?>
<?php $this->Flash->render('auth'); // silently consume auth flashes ?>
<div class="view-auth view-auth-success">
    <?= $this->element('Login/message_success', [
        'heading' => __('Check your mailbox!'),
        'body' => [
            __('You got an email with password recovery instructions, please check your mailbox.'),
            __('If you did not receive an email, please check your spam folder or contact support.')
        ],
        'link' => [__('<- Back to login'), ['_name' => 'user:login']]
    ]); ?>
</div>
