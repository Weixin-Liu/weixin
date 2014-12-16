<?php 
namespace Yinshine\PageBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-pills');

        $menu->addChild('Home', array('route' => 'yinshine_homepage'));
        $menu->addChild('Product & Service', array(
            'route' => 'yinshine_page',
            'routeParameters' => array('id' => 1)
        ));
        $menu->addChild('Sample', array(
            'route' => 'yinshine_page',
            'routeParameters' => array('id' => 2)
        ));
        $menu->addChild('About Us', array(
            'route' => 'yinshine_page',
            'routeParameters' => array('id' => 3)
        ));
        $menu->addChild('Contact Us', array(
            'route' => 'yinshine_page',
            'routeParameters' => array('id' => 4)
        ));

/*        $menu['Sample']->addChild('关于我们', array(
            'route' => 'yinshine_page', 
            'routeParameters' => array('id' => 2)
        ));*/

        return $menu;
    }
}
?>