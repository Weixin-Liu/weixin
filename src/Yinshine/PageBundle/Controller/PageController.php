<?php

namespace Yinshine\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('YinshinePageBundle:Page:index.html.twig');
    }

    public function showAction($id)
    {
        return $this->render('YinshinePageBundle:Page:show.html.twig');
    }
}
