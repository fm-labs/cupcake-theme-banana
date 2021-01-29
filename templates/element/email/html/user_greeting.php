<p>
    <?php if (isset($user)) : ?>
    Guten Tag <?= $user->display_name; ?>,
    <?php else : ?>
    Guten Tag,
    <?php endif; ?>
</p>