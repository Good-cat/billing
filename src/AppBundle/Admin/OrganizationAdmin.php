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

class OrganizationAdmin extends Admin {
    protected function configureFormFields(FormMapper $formMapper)
    {
        $subject = $this->getSubject();
        $formMapper
            ->tab('Общая информация')
                ->with('Общая информация', array('class' => 'col-xs-7'))
                    ->add('fullName', 'text', array(
                        'label' => 'Полное наименование',
                        'attr' => array(
                            'title' => 'Обязательно к заполнению'
                        ),
                        )
                    )
                    ->add('shortName', 'text', array(
                        'label' => 'Краткое наименование',
                        'attr' => array(
                            'title' => 'Не обязательно к заполнению'
                        ),
                        'required' => false))
                    ->add('ministry', 'sonata_type_model_list', array('label' => 'Министерство (ведомство)', 'required' => false))
                    ->add('unp', 'text', array('label' => 'УНП (Учетный номер плательщика)', 'required' => false))
                    ->add('okpo', 'text', array(
                        'label' => 'ОКПО',
                        'attr' => array(
                            'title' => 'Общегосударственный классификатор предприятий и организаций'
                        ),
                        'required' => false))
            ->end()
            ->with('Банковские реквизиты', array('class' => 'col-xs-5'))
                ->add('bank',  'sonata_type_model_list', array('label' => 'Банк'));
//        if ($subject->getBank()->getCode()) {
//            $formMapper->add('bank.code', 'text', array(
//                'label' => 'Код банка',
//                'attr' => array(
//                    'disabled' => true
//                )
//            ));
//        }
        $formMapper
                ->add('bankAccount', 'text', array(
                    'label' => 'Расчетный счет',
                    'attr' => array(
                        'title' => '13-разрядный внутриреспубликанский расчетный счет'
                    ),
                ))
                ->add('iban', 'text', array(
                        'label' => 'IBAN',
                        'attr' => array(
                            'title' => 'Расчетный счет по ISO 13616'
                        )
                    )
                )
            ->end()
        ->end()
        ->tab('Объекты')
            ->with('Реестр объектов организации')
                ->add('facilities', 'sonata_type_collection',
                    array(
                        'label' => 'Объекты',
                        'required' => false,
                        'by_reference' => false,
                    ),
                    array('edit' => 'inline', 'inline' => 'standard'))
            ->end()
        ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('shortName', null, array('label' => 'Краткое наименование'))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('shortName', null, array('label' => 'Краткое наименование'))
            ->add('facilities', 'name', array('label' => 'Объекты'))
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
                ->add('fullName', 'text', array(
                    'label' => 'Полное наименование'))
                ->add('facilities')
            ->end()
            ->with('Банковские реквизиты', array('class' => 'col-xs-6'))
                ->add('bank.name', null, array('label' => 'Наименование банка'))
                ->add('bank.code')
            ->end();
    }
} 