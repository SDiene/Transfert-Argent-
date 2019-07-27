<?php

namespace App\Form;

use App\Entity\Utilisateur;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Transaction;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $optionsn)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('login')
            ->add('password')
            ->add('datenaissance')
            ->add('profil')
            ->add('transaction',EntityType::class,[
                'class'=>Transaction::class,
                'choice_label' => 'transaction_id'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'csrf_protection' =>false
        ]);
    }
}
