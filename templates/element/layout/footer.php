<div class="footer-1">
    <div class="container">
        <?= $this->element('layout/footer/footer_panel'); ?>
    </div>
</div>

<div class="footer-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="footer-copyright">
                    <p class="text-left text-center-xs">
                        <?= date('Y'); ?> &copy; fm-labs
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 text-right">
                <div class="text-right text-center-xs">
                    <?= $this->element('layout/footer/footer_nav'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
