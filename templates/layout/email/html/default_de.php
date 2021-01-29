<?php $this->extend('base'); ?>
<?php $this->start('greeting'); ?>
<p>
    <?php if (isset($user) && $user->display_name) : ?>
        Guten Tag <?= h($user->display_name); ?>,
    <?php else : ?>
        Guten Tag,
    <?php endif; ?>
</p>
<?php $this->end(); ?>

<?= $this->fetch('content'); ?>

<?php $this->start('byebye'); ?>
<p>
    Ihr ThemeBanana-Team
</p>
<?php $this->end(); ?>

<?php $this->start('footer_notice'); ?>
<div class="email-footer-notice" style="font-size: 12px;">
    Anmerkung: Diese Nachricht und alle Anhänge sind Eigentum von ThemeBanana und nur für die angegebene Person oder Organisation bestimmt.
    Wenn Sie diese Nachricht irrtümlich erhalten, informieren Sie bitte den Absender per E-Mail und löschen Sie die Nachricht.
    Wenn Sie nicht der vorgesehene Empfänger sind, dürfen Sie diese Nachricht oder die Anhänge weder ganz noch teilweise
    verwenden, kopieren oder weiterverbreiten.
</div>
<?php $this->end(); ?>

<?php $this->start('footer_menu'); ?>
<div class="email-footer-nav" style="text-align: center;">
    <?= $this->Html->link(
        'Anmelden',
        $this->Url->build(Cake\Core\Configure::read('Pages.register') + ['lang' => 'de'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Kontakt',
        $this->Url->build(Cake\Core\Configure::read('Pages.contact') + ['lang' => 'de'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Datenschutz',
        $this->Url->build(Cake\Core\Configure::read('Pages.privacy') + ['lang' => 'de'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'Impressum',
        $this->Url->build(Cake\Core\Configure::read('Pages.imprint') + ['lang' => 'de'], ['fullBase' => true])
    ); ?>&nbsp;|
    <?= $this->Html->link(
        'FAQ',
        $this->Url->build(Cake\Core\Configure::read('Pages.faq') + ['lang' => 'de'], ['fullBase' => true])
    ); ?>
</div>
<?php $this->end(); ?>
