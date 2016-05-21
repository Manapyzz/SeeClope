<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GlassSearchType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'all' => 'Tout type de verre',
                'unifocaux' => 'unifocaux',
                'progressifs' => 'progressifs',
                'mi-distance' => 'mi-distance',
            ),
            'empty_value' => false
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}