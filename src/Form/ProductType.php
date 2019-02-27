<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('category')
            ->add('sku')
            ->add('quantity',
                NumberType::class
            )
            ->add('price',
                NumberType::class
            )
            ->add('created_at',
                DateTimeType::class,
                [
                    'widget'        => 'single_text',
                    'format'        => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
                    'property_path' => 'createdAt',
                ]
            )
            ->add('modified_at',
                DateTimeType::class,
                [
                    'widget'        => 'single_text',
                    'format'        => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
                    'property_path' => 'modifiedAt',
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'allow_extra_fields' => true,
            'csrf_protection' => false
        ]);
    }
}
