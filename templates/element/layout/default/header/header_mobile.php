<?php
/*
 * @todo Insert logo image from settings
 */
$this->loadHelper('Cupcake.Menu');
$menu = \Cupcake\Menu\Menu::get(Cake\Core\Configure::read('ThemeBanana.Ui.Header.Mobile.menuName'));
?>
<div class="header-mobile collapsed container">
    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="mobile-header-logo">
                <?=
                $this->Html->image(
                    'brand/logo/logo-hybrid.svg',
                    ['height' => '75', 'url' => '/']
                ); ?>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="mobile-menu-trigger">
                <?= $this->Html->image('icons/mobile_menu_bt.svg', [
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
    </div>
</div>
