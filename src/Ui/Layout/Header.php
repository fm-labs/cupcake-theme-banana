<?php
namespace ThemeBanana\Ui\Layout;

use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cupcake\Menu\Menu;

class Header
{
    protected $elementName = "layout/defaut/header";

    public function data()
    {
        $menu = null;
        $menuId = Configure::read('ThemeBanana.Menu.header');
        if ($menuId) {
            $menu = Menu::get($menuId);
        }

        return [
            'menuId' => $menuId,
            'menu' => $menu
        ];
    }
}
