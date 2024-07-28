<?php
$this->extend('/base');
$this->assign('title', __d('user','Password recovery')); ?>
<?php $this->Flash->render('auth'); // silently consume auth flashes ?>
<div class="view-auth view-auth-success">
    <?= $this->element('Login/message_success', [
        'heading' => __d('user','Check your mailbox!'),
        'body' => [
            __d('user','You got an email with password recovery instructions, please check your mailbox.'),
            __d('user','If you did not receive an email, please check your spam folder or contact support.')
        ],
        'link' => [__d('user','<- Back to login'), ['_name' => 'user:login']]
    ]); ?>
</div>
