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
        $textpreparation = new TextPreparation();
        $algorithm = new Algorithm();
        $text = 'В 2011 году Альфред Макьюэн (Alfred McEwen) из университета Аризоны в Тусоне (США) и его коллеги изучали снимки, сделанные камерой HiRISE на борту зонда MRO. На некоторых снимках крутых склонов и краев кратеров видны темные полосы шириной 0,5-5 метров, которые появляются и разрастаются в летний период и исчезают марсианской зимой.

Как предполагали тогда планетологи, эти полосы могут быть потоками очень соленой воды. Такая вода остается жидкой при летних температурах на этих склонах, достигающих 250-300 кельвинов, или примерно от минус 23 до плюс 26 градусов Цельсия. Ученые тогда подчеркивали, что сами по себе эти наблюдения не подтверждают данной гипотезы; кроме того, источники таких «минеральных ручьев», если они действительно существуют, также были не ясны.

В своей новой работе, которую НАСА окрестило «разрешением загадки Марса», группа Макьюэна представила первые доказательства в пользу того, что такие соленые ручьи все же существуют. Они получили их, проанализировав данные, собранные инструментом CRISM во время наблюдений за кратерами Паликир и Гейл. В первом были найдены самые толстые и длинные темные полосы, а во втором сейчас находится марсоход Curiosity.';

        $result = $textpreparation->setText($text)->getMNumbers();
        $result = $algorithm->setM($result)->hash();
        return $this->render('default/index.html.twig', array('result' => $result));
    }
}
