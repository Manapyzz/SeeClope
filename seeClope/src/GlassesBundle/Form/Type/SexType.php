<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SexType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'homme' => 'Homme',
                'femme' => 'Femme',
            )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}