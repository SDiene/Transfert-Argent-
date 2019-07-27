<?php

namespace App\Form;

use App\Entity\Depot;
use App\Entity\Compte;
use App\Entity\Partenaire;
use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomentreprise')
            ->add('ninea')
            ->add('adresse')
            ->add('email')
            ->add('tel')
            ->add('compte',EntityType::class,[
                'class'=>Compte::class,
                'choice_label' => 'compte_id'
            ])
            ->add('user',EntityType::class,[
                'class'=>User::class,
                'choice_label' => 'user_id'
            ])
            ->add('depot',EntityType::class,[
                'class'=>Depot::class,
                'choice_label' => 'depot_id'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
            'csrf_protection' =>false
        ]);
    }
}
