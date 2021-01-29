<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->fetch('emailcss'); ?>
</head>
<body style="min-width: 860px;">
<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td>&nbsp;</td>
        <td align="center" width="850">
            <?php /* Header */ ?>
            <table class="email-header-table" bgcolor="#141C23" cellpadding="20" cellspacing="0" width="850" style="min-width: 850px; max-width: 850px;">
                <tr>
                    <td>
                        <div class="email-header-subject" align="right" style="color: #88C7EA; font-size: 28px; line-height: 28px;">
                            <?= (isset($_subject)) ? h($_subject) : ''; ?>
                        </div>
                    </td>
                </tr>
            </table>

            <?= $this->fetch('before') ?>

            <?php /* Body */ ?>
            <div class="email-main" style="margin: 60px 15px 100px 15px; text-align: left; color: #000;">
                <?= $this->fetch('greeting'); ?>
                <?= $this->fetch('content') ?>
            </div>

            <?= $this->fetch('after') ?>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>