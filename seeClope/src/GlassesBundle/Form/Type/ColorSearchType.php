<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ColorSearchType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'all' => 'Toutes Couleurs',
                'ecaille' => 'Ecaille',
                'gris' => 'Gris',
                'marron' => 'Marron',
                'rouge' => 'Rouge',
                'vert' => 'Vert',
                'violet' => 'Violet',
                'dorée' => 'Dorée',
                'bleue' => 'Bleue',
            ),
            'empty_value' => false
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
