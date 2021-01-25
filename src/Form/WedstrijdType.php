<?php

namespace App\Form;

use App\Entity\Wedstrijd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WedstrijdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ronde')
            ->add('score1')
            ->add('score2')
            ->add('SpelerID1')
            ->add('SpelerID2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Wedstrijd::class,
        ]);
    }
}
