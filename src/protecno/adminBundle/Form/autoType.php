<?php

namespace protecno\adminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class autoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anio')
            ->add('codigo')
            ->add('motor')
            ->add('km')
            ->add('interior')
            ->add('exterior')
            ->add('puertas')
            ->add('llaves')
            ->add('tenencia')
            ->add('verificacion')
            ->add('refacturacion')
            ->add('precio')
            ->add('precio_anterior')
            ->add('rebaja')
            ->add('gastosReparacion')
            ->add('observaciones')
            ->add('modelo')
            ->add('files','collection', array(
                'type'      => 'file',
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'options'=>array(
                    'required'  => false,
                    'attr'  => array('class' => 'unidades'),
                )))
            ->add('categoria')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'protecno\adminBundle\Entity\auto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'protecno_adminbundle_auto';
    }
}
