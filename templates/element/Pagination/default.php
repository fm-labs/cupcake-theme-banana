<?php
/**
 * Default pagination template element
 */
$counterFormat = $counterFormat ?? 'range';
$counter = $counter ?? []; // Paginator::counter options
$numbers = $numbers ?? []; // Paginator::number options
?>
<nav class="nav-pagination" style="margin: 0.5em 0 1em 0">
    <ul class="pagination pagination-counter">
        <li><span><?= $this->Paginator->counter($counterFormat, $counter) ?></span></li>
    </ul>

    <ul class="pagination pagination-menu pull-right">
        <?= $this->Paginator->prev(__d('theme_banana', 'previous')) ?>
        <?= $this->Paginator->numbers($numbers) ?>
        <?= $this->Paginator->next(__d('theme_banana', 'next')) ?>
    </ul>
    <div class="clearfix"></div>
</nav>