<?php $this->extend('base'); ?>
<?php $this->start('greeting'); ?>
<p>
    <?php if (isset($user) && $user->display_name) : ?>
        Good Day <?= h($user->display_name); ?>,
    <?php else : ?>
        Good Day,
    <?php endif; ?>
</p>
<?php $this->end(); ?>

<?= $this->fetch('content'); ?>

<?php $this->start('byebye'); ?>
<p>
    Your ThemeBanana-Team
</p>
<?php $this->end(); ?>

<?php $this->start('footer_notice'); ?>
<div class="email-footer-notice">
    Notice: This message and any attachments are the property of ThemeBanana and are intended solely for the named recipients or entity to whom this message is addressed. If you have received this message in error please inform the sender via e-mail and delete the message. If you are not the intended recipient you are not allowed to use, copy or disclose the contents or attachments in whole or in part.
</div>
<?php $this->end(); ?>

<?php $this->start('footer_menu'); ?>
<div class="email-footer-nav" style="text-align: center;">
    <?= $this->Html->link(
        'Register',
        $this->Url->build(Cake\Core\Configure::read('Pages.register') + ['lang' => 'en'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Contact',
        $this->Url->build(Cake\Core\Configure::read('Pages.contact') + ['lang' => 'en'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Privacy',
        $this->Url->build(Cake\Core\Configure::read('Pages.privacy') + ['lang' => 'en'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Imprint',
        $this->Url->build(Cake\Core\Configure::read('Pages.imprint') + ['lang' => 'en'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'FAQ',
        $this->Url->build(Cake\Core\Configure::read('Pages.faq') + ['lang' => 'en'], ['fullBase' => true])
    ); ?>
</div>
<?php $this->end(); ?>
