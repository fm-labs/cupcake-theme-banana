<?php

use Cake\Core\Configure;

$this->setLayout('user');
$this->assign('title', __d('user','Register'));

$form = $this->get('form');
?>
<div class="view-login">
    <div class="login-container">
        <div class="row">

            <div class="col-sm-12 col-md-7">
                <div class="login-box login-box-form box-form">
                    <div class="login-heading">
                        <?= __d('user','Create an account'); ?>
                    </div>
                    <div class="login-message">
                        <?php echo $this->Flash->render('auth'); ?>
                    </div>
                    <div class="login-body">
                        <?= $this->Form->create($form, ['novalidate' => true]); ?>
                        <?= $this->Form->control('email', [
                            'required' => true,
                            'type' => 'email',
                            'class' => 'form-control',
                            'placeholder' => __d('user','E-Mail'),
                            'label' => false,
                        ]); ?>
                        <?= $this->Form->control('password1', [
                            'required' => true,
                            'type' => 'password',
                            'class' => 'form-control',
                            'placeholder' => __d('user','Password'),
                            'label' => false,
                        ]); ?>
                        <?= $this->Form->control('password2', [
                            'required' => true,
                            'type' => 'password',
                            'class' => 'form-control',
                            'placeholder' => __d('user','Repeat password'),
                            'label' => false,
                        ]); ?>
                        <?= $this->Form->control('agree_terms', [
                            'required' => true,
                            'type' => 'checkbox',
                            'label' => __d('user',
                                'I accept the {0}.',
                                $this->Html->link(
                                    __d('user','terms and conditions'),
                                    Configure::read('User.Pages.terms', '/terms'),
                                    ['target' => '_blank']
                                )
                            ),
                            'escape' => false,
                        ]); ?>
                        <?php if (\Cake\Core\Plugin::loaded('GoogleRecaptcha') && Configure::read('User.Recaptcha.enabled')) : ?>
                            <?= $this->Form->control('g-recaptcha-response', ['type' => 'recaptcha', 'label' => false]); ?>
                        <?php endif; ?>
                        <?= $this->Form->submit(
                            __d('user','Create account'),
                            ['class' => 'btn btn-block btn-primary']
                        ); ?>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-5">
                <div class="login-box">
                    <div class="login-heading">
                        <?= __d('user','You already have an account?'); ?>
                    </div>
                    <div class="login-body">
                        <p class="hidden-xs">
                            <?= __d('user','Please log in to access your user account.'); ?>
                        </p>
                        <p>
                            <?= $this->Html->link(
                                __d('user','To the login'),
                                Configure::read('User.Pages.login', ['_name' => 'user:login']),
                                ['class' => 'btn btn-primary btn-block-xs']
                            ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
