<?php

namespace ThemeBanana\View;

use Cake\View\View;

class ThemeView extends View
{
    /**
     * @inheritDoc
     */
    public function initialize(): void
    {
        parent::initialize();
        //$this->loadHelper('ThemeBanana.Theme');
        $this->loadHelper('Bootstrap.Bootstrap');
    }
}
