<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Command;

use AppBundle\Entity\DictionaryBank;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\SimpleXMLElement;

class dbcCommand extends ContainerAwareCommand {
    protected function configure()
    {
        $this
            ->setName('dbc')
            ->setDescription('Converting cvs bank dictionary')
            ->addArgument('fileName');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = $input->getArgument('fileName');

        $array = array();
        $bank = array();
        $banks = array();
        if (($handle = fopen($file, 'r')) !== false) {
            while ($string = fgetcsv($handle, 10000, ';')){
                foreach ($string as &$item) {
                    $item = iconv('cp1251', 'utf8', $item);
                }
                unset($item);
                $array[] = $string;
                if ($string[1] == 'Банк' && $string[5] !== 'ЛИКВ') {
                    $banks[] = $string;
                    $bank_object = new DictionaryBank();
                    $bank_object->setCode(substr($string[2], -3));
                    $bank_object->setMfo($string[2]);
                    $bank_object->setName($string[3]);
                    $bank_object->setSymbolicAddress($string[4]);
                    $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
                    $entityManager->persist($bank_object);
                }
            }

            $entityManager->flush();
            foreach ($array as $string) {
                if ($string[0]){
                    $mfo = substr($string[0], 20, 9);
                }
                if ($string[1] == 'Филиал' && $string[5] !== 'ЛИКВ') {
                    $bank_repository = $this->getContainer()->get('doctrine')->getRepository('AppBundle:DictionaryBank');
                    $bank_object = new DictionaryBank();
                    $bank_object->setCode(substr($string[2], -3));
                    $bank_object->setMfo($string[2]);
                    $bank_object->setName($string[3]);
                    $bank_object->setSymbolicAddress($string[4]);
                    $bank_object->setParent($bank_repository->findOneBy(array('mfo' => $mfo))->getId());
                    $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
                    $entityManager->persist($bank_object);
                    $bank = array(
                        'code' => substr($string[2], -3),
                        'MFO' => $string[2],
                        'name' => $string[3],
                        'parent_mfo' => $mfo
                    );
                    $banks[] = $bank;
                }
                $entityManager->flush();
            }

            fclose($handle);
        }
        var_dump($banks);
        $entityManager = $this->getContainer()->get('doctrine')->getEntityManager();

        $output->writeln($file);
    }
} 