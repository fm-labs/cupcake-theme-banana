<?php
declare(strict_types=1);

/**
 * @var \Cake\View\View $this
 */
$menuKey = Cake\Core\Configure::read('ThemeBanana.Ui.Header.Nav.menuName', 'primary');
//$menu = \Cupcake\Menu\Menu::get($menuKey);
$menu = null;

$this->loadHelper('Cupcake.Menu');
?>
<div class="header-screen container">
    <div class="row">
        <div class="col-md-4">
            <div class="top-header-logo">
                <?= $this->element('layout/header/logo'); ?>
            </div>
        </div>
        <div class="col-md-8">
            <?php if ($menu): ?>
            <nav class="top-header-nav">
                <?php echo $this->Menu->create(
                    $menu->toArray(),
                    ['class' => 'nav nav-horizontal']
                )->render(); ?>
            </nav>
            <?php endif; ?>
        </div>
    </div>
</div>
