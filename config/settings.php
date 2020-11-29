<?php
return ['Settings.ThemeBanana' => [
    'ThemeBanana.Ui.Header.Screen.menuName' => [
        'group' => 'theme.ui.header',
        'help' => 'Header menu',
        'default' => 'primary',
        'options' => \Cupcake\Menu\Menu::configured(),
    ],
    'ThemeBanana.Ui.Header.Mobile.menuName' => [
        'group' => 'theme.ui.header',
        'help' => 'Header menu',
        'default' => 'primary',
        'options' => \Cupcake\Menu\Menu::configured(),
    ],
    'ThemeBanana.Ui.Footer.Nav.menuName' => [
        'group' => 'theme.ui.footer',
        'help' => 'Footer menu',
        'default' => 'footer',
        'options' => \Cupcake\Menu\Menu::configured(),
    ],
]];
