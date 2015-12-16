<?php

namespace Uni\Bundle\MarcaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class anunciosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreNot')
            ->add('textoNot')
            ->add('companiaNot')
            ->add('noticiass')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\Bundle\MarcaBundle\Entity\anuncios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_marcabundle_anuncios';
    }
}
