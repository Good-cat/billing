<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use STBDigitalSignatureBundle\Hash\TextPreparation;
use STBDigitalSignatureBundle\Hash\Algorithm;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $text = 'а';

        var_dump(hash('gost', $text));

        $textPreparation = new TextPreparation($text);
        $M = $textPreparation->getM();
        $algorithm = new Algorithm($M);
        $result = $algorithm->hash();
        return $this->render('default/index.html.twig', array('result' => $result));
    }

    /**
     * @Route("/rabbit/sent", name="rabbit_sent")
     */
    public function rabbitSentAction()
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->queue_declare('helloq', false, false, false, false);

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'helloq');

        echo " [x] Sent 'Hello World!'\n";
        $channel->close();
        $connection->close();

        return new Response("Sent 'Hello World!'");
    }

    /**
     * @Route("/rabbit/receive", name="rabbit_receive")
     */
    public function rabbitReceiveAction()
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->queue_declare('helloq', false, false, false, false);

        $callback = function($msg) {
            echo " [x] Received ". $msg->body. "\n";
        };

        $channel->basic_consume('helloq', '', false, true, false, false, array($this, 'worker'));

        while(count($channel->callbacks))
        {
            $channel->wait();
        }

        $channel->close();
        $connection->close();

        return new Response("Sent 'Hello World!'");
    }

    public function worker()
    {
        die('ok');
    }
}
