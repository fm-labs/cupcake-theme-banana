<?php
declare(strict_types=1);

/**
 * @var \Cake\View\View $this
 */
$logoImgUrl = \Cake\Core\Configure::read('Theme.Ui.Logo.url') ?: 'ThemeBanana.logo/logo-icon-normal.svg';
$logoUrl = \Cake\Core\Configure::read('Theme.Ui.Logo.url') ?: '/';
$logoHeight = \Cake\Core\Configure::read('Theme.Ui.Logo.height') ?: null;
$logoWidth = \Cake\Core\Configure::read('Theme.Ui.Logo.width') ?: null;
?>
<div class="header-logo">
    <?= $this->Html->image(
        $logoImgUrl,
        ['height' => $logoHeight, 'width' => $logoWidth, 'url' => $logoUrl]
    ); ?>
</div>
