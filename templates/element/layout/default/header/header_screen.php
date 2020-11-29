<?php
$this->loadHelper('Cupcake.Menu');
/*
$menu = new \Cupcake\Menu\Menu();
$menu->addItem('Home', '/');
$menu->addItem('New features', '#');
$menu->addItem('Press', '#');
$menu->addItem('New hires', '#');
$menu->addItem('About', '#');
*/
$menu = \Cupcake\Menu\Menu::get(Cake\Core\Configure::read('ThemeBanana.Ui.Header.Screen.menuName'));
?>
<div class="header-screen container">
    <div class="row">
        <div class="col-md-4">
            <div class="top-header-logo">
                <?=
                $this->Html->image(
                    'brand/logo/logo-hybrid.svg',
                    ['height' => '75', 'url' => '/']
                ); ?>
            </div>
        </div>
        <div class="col-md-8">
            <nav class="top-header-nav">
                <?php echo $this->Menu->create(
                    $menu->toArray(),
                    ['class' => 'nav nav-horizontal']
                )->render(); ?>
            </nav>
        </div>
    </div>
</div>
