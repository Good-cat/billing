<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Admin;

use Knp\Menu\ItemInterface;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class DictionaryBankAdmin extends Admin {
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Название',
                'attr' => array(
                    'title' => 'Обязательное поле'
                )
            ))
            ->add('code', null, array(
                'label' => 'Код',
                'attr' => array(
                    'title' => 'Обязательное поле'
                )
            ))
            ->add('mfo', null, array(
                'label' => 'Код МФО',
                'attr' => array(
                    'title' => 'Межфилиальные обороты. Обязательное поле'
                )
            ))
            ->add('swift', null, array(
                'label' => 'SWIFT BIC',
                'attr' => array(
                    'title' => 'Банковский идентификационный код согласно ISO 9362:2014'
                )
            ))
            ->add('symbolicAddress', null, array(
                'label' => 'Адрес',
                'attr' => array(
                    'title' => 'Символьный неструктурированный адрес. Обязательное поле'
                )
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Название'))
            ->add('code', null, array('label' => 'Код'))
            ->add('mfo', null, array('label' => 'Код МФО'))
            ->add('symbolicAddress', null, array('label' => 'Адрес'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label' => 'Название'))
            ->add('code', null, array('label' => 'Код'))
            ->add('mfo', null, array('label' => 'Код МФО'))
            ->add('symbolicAddress', null, array('label' => 'Адрес'))
        ;
    }
} 