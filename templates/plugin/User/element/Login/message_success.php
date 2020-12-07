<div class="message text-center" style="margin-top: -50px; /*width: 320px;*/">

    <div class="image text-center">
        <svg id="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" style="height: 200px;">
            <defs><style>.cls-1{fill:#49b449;}</style></defs>
            <path class="cls-1" d="M44.83,60.34a2.69,2.69,0,0,0,2,.84h.1a2.72,2.72,0,0,0,2-1L64.28,41.4A2.69,2.69,0,1,0,60.11,38L46.64,54.43,41.75,49.3A2.69,2.69,0,0,0,37.85,53Z"/>
            <path class="cls-1" d="M50,82.06a31.71,31.71,0,1,0-22.42-9.28A31.5,31.5,0,0,0,50,82.06ZM31.39,31.74a26.32,26.32,0,1,1,0,37.23A26.15,26.15,0,0,1,31.39,31.74Z"/>
        </svg>
    </div>

    <?php if (isset($heading) && $heading) : ?>
    <h1><?= h($heading); ?></h1>
    <?php endif; ?>

    <?php if (is_array($body)) : ?>
        <?php foreach ((array)$body as $row) : ?>
        <p>
            <?= h($row); ?>
        </p>
        <?php endforeach; ?>
    <?php else : ?>
        <?= $row; ?>
    <?php endif; ?>

    <?php if (isset($link)) : ?>
    <div>
        <p>
            <?= call_user_func_array([$this->Html, 'link'], $link); ?>
        </p>
    </div>
    <?php endif; ?>

</div>