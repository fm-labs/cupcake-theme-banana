<?php
/**
 * @var \Cake\View\View $this
 *
 * @todo Implement user profile picture
 * @todo Implement user status
 * @todo Implement user notifications with counter
 */
?>
<div class="sidebar-user user-success">
    <div class="sidebar-user-image sidebar-item text-center">
        <?= $this->Html->image('user_dummy_500.png', ['class' => 'img-user img-circle']); ?>
        <!--
        <div class="sidebar-user-counter"><span>1</span></div>
        -->
    </div>

    <div class="sidebar-user-profile sidebar-item text-center">
    <?php if ($this->request->getSession()->read('Auth')) : ?>
        <div>
            <span><?= h($this->request->getSession()->read('Auth.display_name')); ?></span><br />
            <?= $this->Html->link(__d('theme_banana', 'Logout'), ['_name' => 'user:logout']); ?>
        </div>
    <?php else: ?>
        <div>
            <span><?= __('Already registered?'); ?></span><br />
            <?= $this->Html->link(__d('theme_banana', 'Login'), ['_name' => 'user:login']); ?>
        </div>
    <?php endif; ?>
    </div>
</div>
