<?php
$this->setLayout('user');
?>
<style>
    .user-view {
        max-width: 400px;
        margin: 0 auto;
    }
</style>
<div class="user-view view">
    <?= $this->Flash->render('auth'); ?>
    <h1 class="heading"><?= $this->fetch('heading', $this->fetch('title')); ?></h1>
    <?= $this->fetch('content'); ?>
</div>
