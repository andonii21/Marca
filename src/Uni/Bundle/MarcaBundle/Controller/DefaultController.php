<?php

namespace Uni\Bundle\MarcaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniMarcaBundle:Default:index.html.twig', array('name' => $name));
    }
}
