<?php
/**
 * Footer navigation element
 * Shared between login- and dashboard- layout
 */
use Cake\Core\Configure;
use Cupcake\Menu\Menu;

$this->loadHelper('Cupcake.Menu');
$menu = Menu::get(Configure::read('ThemeBanana.Ui.Footer.Nav.menuName'));
?>
<nav class="footer-nav">
    <?php echo $this->Menu->create(
        $menu->toArray(),
        ['class' => 'nav nav-horizontal']
    )->render(); ?>
    <div class="clearfix"></div>
</nav>
