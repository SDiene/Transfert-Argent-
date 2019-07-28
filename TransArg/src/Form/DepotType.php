<?php

namespace App\Form;

use App\Entity\Depot;
use App\Entity\Partenaire;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DepotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(new \DateTime())
            ->add('montant')
            ->add('partenaire',EntityType::class,[
                'class'=>Partenaire::class,
                'choice_label'=>'partenaire_id'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Depot::class,
            'csrf_protection' =>false
        ]);
    }
}
