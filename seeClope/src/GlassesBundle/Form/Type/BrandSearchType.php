<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BrandSearchType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'all' => 'Toutes Les Marques',
                'Ray Ban' => 'Ray Ban',
                'Oliver People' => 'Oliver People',
                'Dior' => 'Dior',
                'Calvin Klein' => 'Calvin Klein',
                'Gucci' => 'Gucci',
                'Paul & Joe' => 'Paul & Joe',
                'Paul Smith' => 'Paul Smith',
                'IKKS' => 'Oakley',
            )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}