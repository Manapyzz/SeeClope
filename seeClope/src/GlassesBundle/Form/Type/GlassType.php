<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GlassType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'unifocaux' => 'unifocaux',
                'progressifs' => 'progressifs',
                'mi-distance' => 'mi-distance',
            ),
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}