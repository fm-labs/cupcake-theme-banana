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
<div class="header-mobile collapsed container">
    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="mobile-header-logo">
                <?= $this->element('layout/header/logo'); ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="mobile-menu-trigger">
                <?= $this->Html->image('icons/menu_mobile_blue.svg', [
                    'alt' => 'Menu',
                    'height' => 40,
                ]); ?>
            </div>
            <script>
                $(document).ready(function() {
                    $('.mobile-menu-trigger > img').click(function() {
                        console.log("Mobile menu triggered");
                        $(this).closest('.header-mobile').toggleClass('collapsed');
                    });
                });
            </script>
        </div>
    </div>
    <div class="mobile-menu">
        <?php if ($menu): ?>
        <nav class="mobile-nav">
            <ul>
                <?php foreach ($menu as $item) : ?>
                    <li><?= $this->Html->link(
                        $item->getTitle(),
                        $item->getUrl(),
                        $item->getAttributes()
                        ); ?></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <?php endif; ?>
    </div>
</div>
