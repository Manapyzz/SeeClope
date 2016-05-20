<?php

namespace GlassesBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class SellerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('brand', BrandType::class)
            ->add('sex', SexType::class)
            ->add('shape', ShapeType::class)
            ->add('leftcorrection', IntegerType::class)
            ->add('rightcorrection', IntegerType::class)
            ->add('glassdiameter', IntegerType::class)
            ->add('glassbridge', IntegerType::class)
            ->add('glassarm', IntegerType::class)
            ->add('glasstype', GlassType::class)
            ->add('color', ColorType::class)
            ->add('firstImageFile', 'file')
            ->add('secondImageFile', 'file')
            ->add('thirdImageFile', 'file')
            ->add('price', IntegerType::class);
    }
}