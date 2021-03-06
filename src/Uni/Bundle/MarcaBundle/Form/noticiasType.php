<?php

namespace Uni\Bundle\MarcaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class noticiasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('contenido')
            ->add('foto')
            ->add('autor')
            ->add('fechaPub')
            ->add('categoria')    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\Bundle\MarcaBundle\Entity\noticias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_marcabundle_noticias';
    }
}
