<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use STBDigitalSignatureBundle\Hash\TextPreparation;
use STBDigitalSignatureBundle\Hash\Algorithm;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $text = 'В 2011 году Альфред Макьюэн (Alfred McEwen) из университета Аризоны в Тусоне (США) и его коллеги изучали снимки, сделанные камерой HiRISE на борту зонда MRO. На некоторых снимках крутых склонов и краев кратеров видны темные полосы шириной 0,5-5 метров, которые появляются и разрастаются в летний период и исчезают марсианской зимой.';

        $textPreparation = new TextPreparation($text);
        $M = $textPreparation->getM();
        $algorithm = new Algorithm($M);
        $result = $algorithm->hash();
        return $this->render('default/index.html.twig', array('result' => $result));
    }
}
