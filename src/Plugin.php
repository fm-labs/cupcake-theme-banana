<?php
declare(strict_types=1);

namespace ThemeBanana;

use Cake\Core\BasePlugin;
use Cake\Core\Configure;
use Cake\Core\PluginApplicationInterface;
use Cake\Event\EventListenerInterface;
use Cake\Event\EventManager;
use Cupcake\Menu\Menu;

class Plugin extends BasePlugin implements EventListenerInterface
{
    /**
     * @inheritDoc
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        parent::bootstrap($app);

        $app->addPlugin('Bootstrap');

        EventManager::instance()->on($this);

        Menu::setConfig('primary', [
            'className' => function () {
                return [
                    /*
                    [
                        'title' => 'Foo',
                        'url' => '#',
                    ],
                    */
                    [
                        'title' => 'Home',
                        'url' => '/',
                        'target' => '_blank',
                    ],
                ];
            },
        ]);
        Menu::setConfig('footer', [
            'className' => function () {
                return [
                    /*
                    [
                        'title' => 'Bar',
                        'url' => '#',
                    ],
                    */
                    [
                        'title' => 'flowmotion-labs.net',
                        'url' => 'https://flowmotion-labs.net',
                        'target' => '_blank',
                    ],
                    [
                        'title' => 'Imprint',
                        'url' => ['_name' => 'content:page:imprint'],
                    ],
                    [
                        'title' => 'Privacy',
                        'url' => ['_name' => 'content:page:privacy'],
                    ],
                ];
            },
        ]);
        Configure::write('ThemeBanana.Ui.Header.Screen.menuName', 'primary');
        Configure::write('ThemeBanana.Ui.Header.Mobile.menuName', 'primary');
        Configure::write('ThemeBanana.Ui.Footer.Nav.menuName', 'footer');
    }

    /**
     * @inheritDoc
     */
    public function implementedEvents(): array
    {
        return [
//            'View.beforeRender' => function (Event $event) {
//                //debug("view: before render");
//                /** @var \Cake\View\View $view */
//                $view = $event->getSubject();
//                if (
//                    $view->helpers()->has('Form')
//                    && !($view->helpers()->get('Form') instanceof \Bootstrap\View\Helper\FormHelper)
//                ) {
//                    $view->helpers()->unload('Form');
//                }
//                $view->loadHelper('Form', ['className' => 'Bootstrap.Form']);
//            },
//            'Controller.beforeRender' => function (Event $event) {
//                //debug("controller: before render");
//                /** @var \Cake\Controller\Controller $controller */
//                $controller = $event->getSubject();
//                //$controller->viewBuilder()
//                //    ->setHelpers(['Html', 'Form' => ['className' => 'Bootstrap.Form']]);
//            },
        ];
    }
}
