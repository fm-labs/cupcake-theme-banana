<?php
$this->setLayout('user');

$heading = $this->fetch('heading');
?>
<div class="user-view view">
    <?php if (!empty($heading)) : ?>
        <h1 class="heading"><?= $heading; ?></h1>
    <?php endif; ?>
    <?= $this->Flash->render('auth'); ?>
    <?= $this->fetch('content'); ?>
</div>
