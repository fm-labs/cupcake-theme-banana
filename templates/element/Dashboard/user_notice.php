<?php
$userNotice = \Cake\Core\Configure::read('Dashboard.userNotice.' . Cake\I18n\I18n::getLocale());
//$userNotice = 'Sorry we are currently experiencing high loads and some services may be down for a while!';
if (!$userNotice) {
    return;
}
?>
<div class="dashboard-user-notice">
    <div class="alert alert-warning" style="margin-bottom: 0;">
        <p>
            <strong>
                <i class="fa fa-exclamation-triangle"></i>
                <?= h($userNotice); ?>
            </strong>
        </p>
    </div>
</div>
