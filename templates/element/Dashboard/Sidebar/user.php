<div class="sidebar-user user-success">
    <div class="sidebar-user-image sidebar-item text-center">
        <?= $this->Html->image('user_dummy_500.png', ['class' => 'img-user img-circle']); ?>
        <!--
        <div class="sidebar-user-counter"><span>1</span></div>
        -->
    </div>
    <div class="sidebar-user-profile sidebar-item text-center">
        <div>
            <span><?= h($this->request->getSession()->read('Auth.display_name')); ?></span><br />
            <?= $this->Html->link(__d('theme_banana', 'Logout'), ['_name' => 'user:logout']); ?>
        </div>
        <div>
        </div>
    </div>
</div>
