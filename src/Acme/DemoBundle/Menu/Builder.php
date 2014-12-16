<?php

namespace Acme\DemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Matcher\Matcher;
use Knp\Menu\Matcher\Voter\UriVoter;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('uri' => '/app_dev.php/demo/hello/Home'));
        $menu->addChild('Comments', array('uri' => '/app_dev.php/demo/hello/comments'));
        $menu->addChild('Symfony2', array('uri' => '/app_dev.php/demo/hello/symfony2'));

        //$menu['Comments']->setUri('#comments');
        $menu['Comments']->addChild('My comments', array('uri' => '/my_comments'));

        return $menu;
    }
}   