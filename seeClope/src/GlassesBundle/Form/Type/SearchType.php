<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('brand', BrandSearchType::class)
            ->add('leftcorrection', IntegerType::class, array(
                'required' => false
            ))
            ->add('rightcorrection', IntegerType::class, array(
                'required' => false
            ))
            ->add('glasstype', GlassSearchType::class, array(
                'required' => false
            ))
            ->add('sex', SexType::class, array(
                'required' => false
            ))
            ->add('color', ColorSearchType::class, array(
                'required' => false
            ))
            ->add('minPrice', IntegerType::class, array(
                'required' => false
            ))
            ->add('maxPrice', IntegerType::class, array(
                'required' => false
            ))
            ->add('shape', ShapeSearchType::class, array(
                'required' => false
            ));
    }

}