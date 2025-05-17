<?php
declare(strict_types=1);

namespace Banana;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Event\EventListenerInterface;
use Cake\Event\EventManager;
use Cupcake\Menu\MenuManager;

class Plugin extends BasePlugin implements EventListenerInterface
{
    /**
     * @inheritDoc
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        parent::bootstrap($app);

        $app->addPlugin('Bootstrap');

        //@todo $app->addOptionalPlugin('Settings');

        EventManager::instance()->on($this);

        MenuManager::setConfig('primary', [
            'className' => function () {
                return [
        /*
                    [
                        'title' => 'Home',
                        'url' => '/',
                    ],
        */
                ];
            },
        ]);
        MenuManager::setConfig('footer', [
            'className' => function () {
                return [
                    /*
                    [
                        'title' => 'Imprint',
                        'url' => ['_name' => 'content:page:imprint'],
                    ],
                    [
                        'title' => 'Privacy',
                        'url' => ['_name' => 'content:page:privacy'],
                    ],
                    */
                ];
            },
        ]);
        /*
        Configure::write('Banana.Ui.Header.Screen.menuName', 'primary');
        Configure::write('Banana.Ui.Header.Mobile.menuName', 'primary');
        Configure::write('Banana.Ui.Footer.Nav.menuName', 'footer');
        */
    }

    /**
     * @inheritDoc
     */
    public function implementedEvents(): array
    {
        return [
//            'View.beforeRender' => function (EventInterface $event) {
//                //debug("view: before render");
//                /** @var \Cake\View\View $view */
//                $view = $event->getSubject();
//                if (
//                    $view->helpers()->has('Form')
//                    && !($view->helpers()->get('Form') instanceof \Bootstrap\View\Helper\FormHelper)
//                ) {
//                    $view->helpers()->unload('Form');
//                }
//                //$view->loadHelper('Form', ['className' => 'Bootstrap.Form']);
//                $view->loadHelper('Bootstrap.Form');
//            },
//            'Controller.beforeRender' => function (EventInterface $event) {
//                //debug("controller: before render");
//                /** @var \Cake\Controller\Controller $controller */
//                $controller = $event->getSubject();
//                //$controller->viewBuilder()
//                //    ->setHelpers(['Html', 'Form' => ['className' => 'Bootstrap.Form']]);
//            },
        ];
    }
}
