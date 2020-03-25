<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'label' => 'Название'
            ])
            ->add('price', null, [
                'label' => 'Цена'
            ])
            ->add('date', null, [
                'label' => 'Дата создания товара в базе'
            ])
            ->add('attributeValues', CollectionType::class, [
                'entry_type' => AttributeValueType::class,
                'entry_options' => ['label' => ' '],
                'label' => 'Характеристики'
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
