<?php
/**
 * Created by PhpStorm.
 * User: itm
 * Date: 01.02.16
 * Time: 15:48
 */

namespace AppBundle\Form;

use Beta\B;
use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilderInterface,
    Symfony\Component\Form\FormView,
    Symfony\Component\Form\FormInterface,
    Symfony\Component\Form\Extension\Core\Type\ButtonType,
    Sonata\AdminBundle\Form\Type\Filter\DefaultType,
    Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestType extends AbstractType{
    public function getName()
    {
        return 'ajax_button';
    }

    public function getParent()
    {
        return 'form';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefined(array());
        $resolver->setDefaults(array(
            'href' => '#',
            'button_name' => 'ButtonName',
            'success' => '',
            'error' => '',
            'data' => array()
        ));

    }

//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder->add('button', 'button');
//    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['href'] = $options['href'];
        $view->vars['button_name'] = $options['button_name'];
        $view->vars['success'] = $options['success'];
        $view->vars['data'] = serialize($options['data']);
    }
} 