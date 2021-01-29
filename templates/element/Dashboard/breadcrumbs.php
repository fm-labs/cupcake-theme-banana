<?php if ($this->fetch('breadcrumbs')) : ?>
    <?= $this->fetch('breadcrumbs'); ?>
<?php else : ?>
    <div id="breadcrumbs">
        <nav>
            <?php
            $this->Breadcrumbs->prepend(__('Dashboard'), '/');
            echo $this->Breadcrumbs->render(
                ['class' => 'nav-horizontal'],
                [
                    'separator' => '&nbsp;>&nbsp;',
                    'class' => 'separator-item',
                    'innerAttrs' => ['class' => 'separator'],
                ]
            );
            ?>
        </nav>
    </div>
<?php endif; ?>