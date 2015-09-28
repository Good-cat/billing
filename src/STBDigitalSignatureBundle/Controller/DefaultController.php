<?php

namespace STBDigitalSignatureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('STBDigitalSignatureBundle:Default:index.html.twig', array('name' => $name));
    }
}
