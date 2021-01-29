<?php
return ['Settings' => [
    'ThemeBanana' => [
        'groups' => [
            'Logo' => [
                'label' => __('Logo'),
            ],
            'Header' => [
                'label' => __('Header'),
            ],
            'Footer' => [
                'label' => __('Footer'),
            ],
            'Fonts' => [
                'label' => __('Fonts'),
            ],
        ],
        'schema' => [
            'Logo.imgUrl' => [
                'label' => __('Logo image url'),
                'group' => 'Logo',
                'help' => 'Logo image path or url',
                'default' => null,
            ],
            'Logo.url' => [
                'label' => __('Logo link url'),
                'group' => 'Logo',
                'help' => 'Logo link url',
                'default' => null,
            ],
            'Logo.height' => [
                'label' => __('Logo image height'),
                'group' => 'Logo',
                'help' => 'in pixels',
                'default' => null,
            ],
            'Logo.width' => [
                'label' => __('Logo image width'),
                'group' => 'Logo',
                'help' => 'in pixels',
                'default' => null,
            ],
            'Header.Screen.menuName' => [
                'label' => __('Header menu for screens'),
                'group' => 'Header',
                'help' => 'Header menu',
                'default' => 'primary',
                'input' => [
                    'empty' => true,
                    'options' => \Cupcake\Menu\Menu::configured(),
                ],
            ],
            'Header.Mobile.menuName' => [
                'label' => __('Header menu for mobile'),
                'group' => 'Header',
                'help' => 'Header menu',
                'default' => 'primary',
                'input' => [
                    'empty' => true,
                    'options' => \Cupcake\Menu\Menu::configured(),
                ],
            ],
            'Footer.noticeText' => [
                'label' => __('Footer notice text'),
                'group' => 'Footer',
                'default' => '',
            ],
            'Footer.Nav.menuName' => [
                'label' => __('Footer menu'),
                'group' => 'Footer',
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
