<?php

namespace IB\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IBPrincipalBundle:Default:index.html.twig');
    }

    public function mapaAction()
    {
         return $this->render('IBPrincipalBundle:Default:mapa.html.twig');
    }
}
