<?php
/*
$menu = new \Cupcake\Menu\Menu();
$menu->addItem('Home', '/');
$menu->addItem('New features', '#');
$menu->addItem('Press', '#');
$menu->addItem('New hires', '#');
$menu->addItem('About', '#');
*/
$menu = \Content\ContentManager::getMenuById(1);
?>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <?php foreach ($menu->getItems() as $item): ?>
                <?php $isActive = '';//$isActive = (\Cake\Routing\Router::normalize($item->getUrl()) == \Cake\Routing\Router::normalize($this->request->getUri()->getPath())) ? ' active' : ''; ?>
                <a class="blog-nav-item<?= $isActive ?>" href="<?= $this->Url->build($item->getUrl()); ?>"><?= h($item->getTitle()); ?></a>
            <?php endforeach; ?>
            <!--
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
            -->
        </nav>
    </div>
</div>
