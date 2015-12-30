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

class DictionaryMinistryAdmin extends Admin {
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->with('Общая информация', array('class' => 'col-xs-7'))
                    ->add('name', 'text', array(
                        'label' => 'Наименование',
                        'attr' => array(
                            'title' => 'Обязательно к заполнению'
                        ),
                        )
                    )
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Наименование'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label' => 'Наименование'))
            ->add('_action', 'actions', array(
                'label' => 'Действия',
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Общая информация', array('class' => 'col-xs-6'))
                ->add('name', 'text', array(
                    'label' => 'Наименование'))
            ->end();
    }
}