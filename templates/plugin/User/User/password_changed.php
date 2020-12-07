<?php
$this->extend('/base');
$this->assign('title', __('Password recovery'));
?>
<div class="view-auth view-auth-success">
    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <?= $this->element('Login/message_success', [
        'heading' => __('Your password has been changed!'),
        'body' => [],
        'link' => [__('Back to settings?'), \Cake\Core\Configure::read('User.Pages.settings')]
    ]); ?>

</div>
