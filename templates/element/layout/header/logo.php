<?php
declare(strict_types=1);

/**
 * @var \Cake\View\View $this
 */
$logoImgUrl = \Cake\Core\Configure::read('Banana.Logo.url', 'logo.png');
$logoTargetUrl = \Cake\Core\Configure::read('Banana.Logo.targetUrl', '/');
$logoHeight = \Cake\Core\Configure::read('Banana.Logo.height', 50);
$logoWidth = \Cake\Core\Configure::read('Banana.Logo.width', null);
?>
<div class="header-logo">
    <?= $this->Html->image(
        $logoImgUrl,
        ['height' => $logoHeight, 'width' => $logoWidth, 'url' => $logoTargetUrl]
    ); ?>
</div>
