<?php

namespace App\Form;

use App\Entity\BonDeCommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AchatLocalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code_commande')
            ->add('reference_facture')
            ->add('reference_facture_fornisseur')
            ->add('reference_facture_embarquement')
           // ->add('date_arrive')
            //->add('prevision_date_arrive')
            //->add('delai_import')
            ->add('type_commande')
            //->add('status')
            //->add('tarif_applique')
            //->add('fret')
            //->add('a_compte_payer')
            //->add('volume_commande')
           // ->add('pat_commande')
            //->add('vol_reel')
            //->add('frai')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BonDeCommande::class,
        ]);
    }
}
