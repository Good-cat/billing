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

class FacilityAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper)
    {
        $regions = array(
            '1' => 'Брестская',
            '2' => 'Витебская',
            '3' => 'Гомельская',
            '4' => 'Гродненская',
            '5' => 'Минская',
            '6' => 'Могилевская'
        );

        $districtsMinskaya = array(
            'BI' => 'Борисовский',
            'BZ' => 'Березинский',
            'DZ' => 'Дзержинский',
            'ER' => 'Червенский',
            'KC' => 'Клецкий',
            'KL' => 'Копыльский',
            'KU' => 'Крупский',
            'LG' => 'Логойский',
            'LK' => 'Любанский',
            'MD' => 'Молодеченский',
            'ME' => 'Мядельский',
            'MI' => 'Минский',
            'NE' => 'Несвижский',
            'PU' => 'Пуховичский',
            'SB' => 'Столбцовский',
            'SD' => 'Стародорожский',
            'SG' => 'Солигорский',
            'SL' => 'Слуцкий',
            'SM' => 'Смолевичский',
            'UZ' => 'Узденский',
            'WL' => 'Вилейский',
            'WO' => 'Воложинский',
        );

        $formMapper
            ->with('Общая информация', array('class' => 'col-xs-7'))
                ->add('organization', 'sonata_type_model_list', array(
                    'label' => 'Организация',
                    'btn_add' => false,
                    'attr' => array('hidden' => true)
            ))
                ->add('name', 'text', array(
                    'label' => 'Наименование',
                    'attr' => array(
                        'title' => 'Обязательно к заполнению',
                        ),
                    )
                )
                ->add('sectorNumber', 'number', array(
                    'label' => 'Номер участка контролера',
                    'attr' => array(
                        'title' => 'Обязательно к заполнению'
                        ),
                    )
                )
                ->add('symbolicAddress', 'text', array(
                        'label' => 'Неструктурированный адрес',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Неструктурированный адрес в виде символьной строки'
                        ),
                    )
                )
//                ->add('number', 'text', array(
//                    'label' => 'Номер',
//                    'required' => false,
//                    'attr' => array(
//                        'title' => 'Номер для согласования с прежней базой (бывший номер субабонента)'
//                    ),
//            ))
            ->end()
            ->with('Структурированный адрес', array('class' => 'col-xs-5'))
                ->add('postcode', 'text', array(
                        'label' => 'Почтовый индекс',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Почтовый индекс',
                            'hidden' => true
                        ),
                    )
                )
                ->add('nameRegion', 'choice', array(
                        'label' => 'Область',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Область',
                            'hidden' => true
                        ),
                        'choices' => array('5' => 'Минская')
                    )
                )
                ->add('nameDistr', 'choice', array(
                        'label' => 'Район',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Район',
                            'hidden' => true
                        ),
                        'choices' => $districtsMinskaya
                    )
                )
                ->add('nameSelSov', 'text', array(
                        'label' => 'Сельсовет',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Сельсовет (для населенных пунктов сельской местности)',
                            'hidden' => true
                        )
                    )
                )
                ->add('objTypName', 'text', array(
                        'label' => 'Тип территориальной единицы',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Тип территориальной единицы',
                            'hidden' => true
                        )
                    )
                )
                ->add('objectName', 'text', array(
                        'label' => 'Наименование территориальной единицы',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Наименование территориальной единицы',
                            'hidden' => true
                        )
                    )
                )
                ->add('elemTypName', 'text', array(
                        'label' => 'Тип элемента улично-дорожной сети',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Тип элемента улично-дорожной сети',
                            'hidden' => true
                        )
                    )
                )
                ->add('elemName', 'text', array(
                        'label' => 'Наименование элемента улично-дорожной сети',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Наименование элемента улично-дорожной сети',
                            'hidden' => true
                        )
                    )
                )
                ->add('typHouse', 'text', array(
                        'label' => 'Тип строения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Тип строения',
                            'hidden' => true
                        )
                    )
                )
                ->add('numHouse', 'text', array(
                        'label' => 'Номер строения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Номер строения',
                            'hidden' => true
                        )
                    )
                )
                ->add('indHouse', 'text', array(
                        'label' => 'Индекс строения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Индекс строения (при наличии)',
                            'hidden' => true
                        )
                    )
                )
                ->add('numCorp', 'text', array(
                        'label' => 'Номер корпуса',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Номер корпуса (при наличии)',
                            'hidden' => true
                        )
                    )
                )
                ->add('indCorp', 'text', array(
                        'label' => 'Индекс корпуса',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Индекс корпуса (при наличии)',
                            'hidden' => true
                        )
                    )
                )
                ->add('typPom', 'text', array(
                        'label' => 'Тип помещения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Тип помещения',
                            'hidden' => true
                        )
                    )
                )
                ->add('numPom', 'text', array(
                        'label' => 'Номер помещения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Номер помещения',
                            'hidden' => true
                        )
                    )
                )
                ->add('indPom', 'text', array(
                        'label' => 'Индекс помещения',
                        'required' => false,
                        'attr' => array(
                            'title' => 'Индекс помещения (при наличии)',
                            'hidden' => true
                        )
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
            ->add('symbolicAddress', 'text', array(
                'label' => 'Адрес'
            ))
            ->add('sectorNumber', 'text', array(
                'label' => 'Номер уч. контр.'
            ))
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
            ->end();
    }


} 