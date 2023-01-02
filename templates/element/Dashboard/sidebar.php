<?php
$sidebarMenu = \Cake\Core\Configure::read('ThemeBanana.Sidebar.menu', []);
$sidebarMenu2 = \Cake\Core\Configure::read('ThemeBanana.Sidebar.menu2', []);
$logoUrl = \Cake\Core\Configure::read('ThemeBanana.Logo.url', 'logo.png');
?>
<aside id="sidebar" class="sidebar">

    <div class="sidebar-header sidebar-header-screen hidden-sm hidden-xs">
        <div class="sidebar-logo sidebar-item">
            <?= $this->Html->image(
                $logoUrl,
                ['height' => 75]
            ); ?>
        </div>

        <?= $this->element('Dashboard/Sidebar/user'); ?>
    </div>

    <div class="sidebar-header sidebar-header-mobile hidden-lg hidden-md">
        <div class="mobile-logo">
            <?= $this->Html->image(
                $logoUrl,
                ['height' => 40]
            ); ?>
        </div>
        <div class="mobile-user">
            <?= $this->Html->image('user_dummy_500.png', [
                'class' => 'img-user img-circle',
                'height' => 40,
            ]); ?>
        </div>
        <div class="mobile-menutoggle">
            <?= $this->Html->link('Menu', '#', ['data-sidebar-menu-toggle' => 1]); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="sidebar-menu">
        <ul class="nav">
            <?php foreach ($sidebarMenu as $item) : ?>
                <?php $class = \Cake\Routing\Router::normalize($this->request->getPath()) == \Cake\Routing\Router::normalize($item[1]) ? 'active' : ''; ?>
                <li class="<?= $class ?>"><?= $this->Html->link($item[0], $item[1], $item[2]); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="sidebar-bottom">
        <div class="sidebar-bottom-menu sidebar-menu">
            <ul class="nav">
                <?php foreach ($sidebarMenu2 as $item) : ?>
                    <?php $class = \Cake\Routing\Router::normalize($this->request->getPath()) == \Cake\Routing\Router::normalize($item[1]) ? 'active' : ''; ?>
                    <li class="<?= $class ?>"><?= $this->Html->link($item[0], $item[1], $item[2]); ?></li>
                <?php endforeach; ?>
                <li><?= $this->Html->link(
                    __d('theme_banana', 'Logout'),
                    ['_name' => 'user:logout'],
                    ['data-icon' => 'sign-out']
                ); ?></li>
            </ul>

        </div>
        <div class="sidebar-bottom-info sidebar-item hidden-xs hidden-sm">
            <?= h(Cake\Core\Configure::read('ThemeBanana.Sidebar.bottomText')); ?>
        </div>
    </div>
</aside>
<script>
    $(document).ready(function() {
       $('[data-sidebar-menu-toggle]').on('click', function(ev) {
           $('#sidebar').find('.sidebar-menu').toggle();
           ev.preventDefault();
           return false;
       });
    });
</script>