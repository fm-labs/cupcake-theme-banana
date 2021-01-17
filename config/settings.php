<?php
return ['Settings' => [
    'ThemeBanana' => [
        'groups' => [
            'Theme.Ui.Logo' => [
                'label' => __('Logo'),
            ],
            'Theme.Ui.Header' => [
                'label' => __('Header'),
            ],
            'Theme.Ui.Footer' => [
                'label' => __('Footer'),
            ],
            'Theme.Ui.Fonts' => [
                'label' => __('Fonts'),
            ],
        ],
        'schema' => [
            'Theme.Ui.Logo.imgUrl' => [
                'label' => __('Logo image url'),
                'group' => 'Theme.Ui.Logo',
                'help' => 'Logo image path or url',
                'default' => null,
            ],
            'Theme.Ui.Logo.url' => [
                'label' => __('Logo link url'),
                'group' => 'Theme.Ui.Logo',
                'help' => 'Logo link url',
                'default' => null,
            ],
            'Theme.Ui.Logo.height' => [
                'label' => __('Logo image height'),
                'group' => 'Theme.Ui.Logo',
                'help' => 'in pixels',
                'default' => null,
            ],
            'Theme.Ui.Logo.width' => [
                'label' => __('Logo image width'),
                'group' => 'Theme.Ui.Logo',
                'help' => 'in pixels',
                'default' => null,
            ],
            'Theme.Ui.Header.Screen.menuName' => [
                'label' => __('Header menu for screens'),
                'group' => 'Theme.Ui.Header',
                'help' => 'Header menu',
                'default' => 'primary',
                'input' => [
                    'empty' => true,
                    'options' => \Cupcake\Menu\Menu::configured(),
                ],
            ],
            'Theme.Ui.Header.Mobile.menuName' => [
                'label' => __('Header menu for mobile'),
                'group' => 'Theme.Ui.Header',
                'help' => 'Header menu',
                'default' => 'primary',
                'input' => [
                    'empty' => true,
                    'options' => \Cupcake\Menu\Menu::configured(),
                ],
            ],
            'Theme.Ui.Footer.noticeText' => [
                'label' => __('Footer notice text'),
                'group' => 'Theme.Ui.Footer',
                'default' => '',
            ],
            'Theme.Ui.Footer.Nav.menuName' => [
                'label' => __('Footer menu'),
                'group' => 'Theme.Ui.Footer',
                'help' => 'Footer menu',
                'default' => 'footer',
                'input' => [
                    'empty' => true,
                    'options' => \Cupcake\Menu\Menu::configured(),
                ],
            ],
        ],
    ],

]];
