<?php

use Cake\Core\Configure;
use Cake\Core\Plugin;

$this->assign('title', __('Login'));
$this->setLayout('user');
?>
<div class="view-login">
    <div class="login-container">
        <div class="row">
            <div class="col-sm-12 col-md-5 hidden-xs hidden-sm">
                <div class="login-box">
                    <div class="login-heading">
                        <p>
                            <?= __('You don’t have an account yet?'); ?>
                        </p>
                        <p>
                            <?= __('No Problem. Register easy, free and without obligation!'); ?>
                        </p>
                    </div>
                    <div class="login-body">
                        <p>
                            <?= $this->Html->link(
                                __('Create an account now'),
                                Configure::read(
                                    'User.Pages.register',
                                    ['_name' => 'user:register']
                                ),
                                ['class' => 'btn btn-primary']
                            ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-7">
                <div class="login-box login-box-form box-form">
                    <div class="login-heading">
                        <?= __('Account Login'); ?>
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
                            'placeholder' => __('E-Mail'),
                        ]); ?>
                        <?= $this->Form->control('password', [
                            'label' => false,
                            'type' => 'password',
                            'class' => 'form-control',
                            'placeholder' => __('Password'),
                        ]); ?>
                        <?php if (Plugin::isLoaded('GoogleRecaptcha') && Configure::read('User.Recaptcha.enabled')) : ?>
                            <?= $this->Form->control(
                                'g-recaptcha-response',
                                ['type' => 'recaptcha', 'label' => false]
                            ); ?>
                        <?php endif; ?>
                        <?= $this->Form->submit(
                            __('Login'),
                            ['type' => 'submit', 'class' => 'btn btn-block btn-primary']
                        ); ?>
                        <?= $this->Form->end(); ?>
                        <p>
                            <?= $this->Html->link(
                                __('Forgot password?'),
                                Configure::read('User.Pages.passwordf', ['_name' => 'user:passwordforgotten'])
                            ); ?>
                            <hr />
                            <?= $this->Html->link(__d('user', 'Back to the website'), '/'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-5 visible-xs visible-sm">
                <div class="login-box">
                    <div class="login-heading">
                        <p>
                            <?= __('You don’t have an account yet?'); ?>
                        </p>
                        <p class="hidden-xs">
                            <?= __('No Problem. Register easy, free and without obligation!'); ?>
                        </p>
                    </div>
                    <div class="login-body">
                        <p>
                            <?= $this->Html->link(
                                __('Create an account now'),
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
