<?php

namespace ImmeubleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImmeubleBundle:Default:index.html.twig');
    }
    public function pageAction(){
        return $this->render('ImmeubleBundle:Default:page_une.html.twig');
    }
    public function layoutAction(){
        return $this->render('ImmeubleBundle::layout.html.twig');
    }
    public function indextemplateAction(){
        return $this->render('ImmeubleBundle:template:index.html.twig');
    }
}
