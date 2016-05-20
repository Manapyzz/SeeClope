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
            ->add('glasstype', IntegerType::class, array(
                'required' => false
            ))
            ->add('search', SubmitType::class );
    }

}