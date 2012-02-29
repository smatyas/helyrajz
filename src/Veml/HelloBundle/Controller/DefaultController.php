<?php

namespace Veml\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('VemlHelloBundle:Default:index.html.twig');
    }
}
