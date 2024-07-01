<?php
$this->extend('/base');
$this->assign('title', __d('user','Password recovery'));
?>
<div class="view-auth view-auth-success">
    <div class="login-message">
        <?php echo $this->Flash->render('auth'); ?>
    </div>

    <?= $this->element('Login/message_success', [
        'heading' => __d('user','Your password has been changed!'),
        'body' => [],
        'link' => [__d('user','Back to settings?'), \Cake\Core\Configure::read('User.Pages.settings')]
    ]); ?>

</div>
