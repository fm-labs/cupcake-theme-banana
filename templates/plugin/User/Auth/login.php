<?php

use Cake\Core\Configure;
use Cake\Core\Plugin;

$this->assign('title', __d('user','Login'));
$this->setLayout('user');
?>
<div class="view-login">
    <div class="login-container-simple">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-box login-box-form box-form" style="margin: 0 auto;">
                    <div class="login-heading text-center">
                        <?= __d('user','Login'); ?>
                    </div>
                    <div class="login-message">
                        <?php echo $this->Flash->render('auth'); ?>
                    </div>
                    <div class="login-body">
                        <?= $this->Form->create(null, ['novalidate']); ?>
                        <?= $this->Form->control('username', [
                            'label' => false,
                            'type' => 'email',
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => __d('user', 'Username'),
                        ]); ?>
                        <?= $this->Form->control('password', [
                            'label' => false,
                            'type' => 'password',
                            'class' => 'form-control',
                            'placeholder' => __d('user', 'Password'),
                        ]); ?>
                        <?php if (Plugin::isLoaded('GoogleRecaptcha') && Configure::read('User.Recaptcha.enabled')) : ?>
                            <?= $this->Form->control(
                                'g-recaptcha-response',
                                ['type' => 'recaptcha', 'label' => false]
                            ); ?>
                        <?php endif; ?>
                        <?= $this->Form->submit(
                            __d('user','Login'),
                            ['type' => 'submit', 'class' => 'btn btn-block btn-primary']
                        ); ?>
                        <?= $this->Form->end(); ?>
                        <p>
                            <?php if (Configure::read('User.Password.recoveryEnabled')) : ?>
                                <?= $this->Html->link(
                                    __d('user','Forgot password?'),
                                    Configure::read('User.Pages.passwordf', ['_name' => 'user:passwordforgotten'])
                                ); ?>
                            <?php endif; ?>
                        </p>
                        <p>
                            <?php //echo $this->Html->link(__d('user', 'Back to the website'), '/'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-5 visible-xs visible-sm">
                <div class="login-box">
                    <div class="login-heading">
                        <p>
                            <?= __d('user','You don’t have an account yet?'); ?>
                        </p>
                        <p class="hidden-xs">
                            <?= __d('user','No Problem. Register easy, free and without obligation!'); ?>
                        </p>
                    </div>
                    <div class="login-body">
                        <p>
                            <?= $this->Html->link(
                                __d('user','Create an account now'),
                                Configure::read(
                                    'User.Pages.register',
                                    ['controller' => 'User', 'action' => 'register']
                                ),
                                ['class' => 'btn btn-primary btn-block-xs']
                            ); ?>
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
