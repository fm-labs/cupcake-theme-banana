<div class="view-auth view-auth-success" style="width: 320px;">
    <?= $this->element('Login/message_success', [
        'heading' => '',
        'body' => $this->Flash->render('auth'),
        'link' => [__d('user','Back to login?'), \Cake\Core\Configure::read('User.Pages.login')]
    ]); ?>
</div>
