<?php
// Privacy directives
$this->set('_private', true);
$this->set('_no_tracking', true);
?>
<style>
    .user-view {
        max-width: 500px;
        margin: 0 auto;
    }
    form .required label::after {
        content:"*"
    }
</style>
<div class="user-view view">
    <?= $this->Flash->render(); ?>
    <?php $this->Flash->render('auth'); // hide auth flash messages ?>
    <h1 class="heading text-center"><?= $this->fetch('heading', $this->fetch('title')); ?></h1>

    <div class="box-form">
        <?= $this->fetch('content'); ?>
    </div>

    <?php if ($this->fetch('userActions')) : ?>
        <?= $this->fetch('userActions'); ?>
    <?php else : ?>
        <p style="margin: 2em 0; text-align: center;">
            <?= $this->Html->link(__d('user',"Back to Settings"), ['plugin' => null, 'controller' => 'Dashboard', 'action' => 'settings']); ?>
        </p>
    <?php endif; ?>
</div>