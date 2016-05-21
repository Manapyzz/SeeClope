<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ShapeSearchType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'all' => 'Toutes les formes',
                'rectangulaire' => 'Rectangulaire',
                'ronde' => 'Ronde',
                'papillon' => 'Papillon',
                'ovale' => 'Ovale',
                'carrée' => 'Carrée',
                'carrée' => 'Carrée',
                'pilote' => 'Pilote',
                'club master' => 'Club Master',
                'Way Farer' => 'Way Farer',
            ),
            'empty_value' => false
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}