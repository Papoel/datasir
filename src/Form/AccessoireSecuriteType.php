<?php

namespace App\Form;

use App\Entity\AccessoireSecurite;
use App\Entity\Esp;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AccessoireSecuriteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $disableIdEspDirecteur = $options['disable_id_esp_directeur'];

        $builder
            ->add(child: 'rf', type: TextType::class, options: [
                'required' => false,
                'label' => 'Repère Fonctionnel',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add(child: 'typeAccSecu', type: TextType::class, options: [
                'required' => false,
                'label' => 'Type d\'accessoire de sécurité',
            ])
            ->add(child: 'categorieRisque', type: ChoiceType::class, options: [
                'required' => false,
                'label' => 'Catégorie de risque',
                'choices' => [
                    'Catégorie I: Pression > 0,5 bar et < 1 bar' => ['I' => 'I'],
                    'Catégorie II: Pression > 1 bar et < 10 bar' => ['II' => 'II'],
                    'Catégorie III: Pression > 10 bar et < 50 bar' => ['III' => 'III'],
                    'Catégorie IV: Pression > 50 bar' => ['IV' => 'IV'],
                ],
            ])
            ->add(child: 'pressionTarage', type: TextType::class, options: [
                'required' => false,
                'label' => 'Pression de tarage',
            ])
            ->add(child: 'caracteristique', type: TextType::class, options: [
                'required' => false,
                'label' => 'Caractéristique',
            ])
            ->add(child: 'fluideControle', type: ChoiceType::class, options: [
                'required' => false,
                'label' => 'Type de fluide',
                'choices' => [
                    'Gaz' => [
                        'Air' => 'Air',
                        'Azote' => 'Azote',
                        'Argon' => 'Argon',
                        'Autre' => 'Autre',
                    ],
                    'Liquide' => [
                        'Eau' => 'Eau',
                        'Huile' => 'Huile',
                        'Autre' => 'Autre',
                    ],
                    'Vapeur' => [
                        'Vapeur' => 'Vapeur',
                    ],
                ],
            ])
            ->add(child: 'fabricant', type: TextType::class, options: [
                'required' => false,
                'label' => 'Fabricant',
            ])
            ->add(child: 'typeNrFabrication', type: TextType::class, options: [
                'required' => false,
                'label' => 'Type ou N° de fabrication',
            ])
            ->add(child: 'blnTarageRp', type: IntegerType::class, options: [
                'label' => 'Tarage',
                'required' => false,
            ])
            ->add(child: 'decretConstruction', type: TextType::class, options: [
                'required' => false,
                'label' => 'Décret de construction',
            ])
            ->add(child: 'blnVerificationConcomitanteRp', type: IntegerType::class, options: [
                'required' => false,
                'label' => 'Vérification concomitante',
            ])
            ->add(child: 'periodiciteManoeuvrabilite', type: TextType::class, options: [
                'required' => false,
                'label' => 'Périodicité de manoeuvrabilité',
            ])
            ->add(child: 'dateDerniereManoeuvrabilite', type: TextType::class, options: [
                'required' => false,
                'label' => 'Date de dernière manoeuvrabilité',
            ])
            ->add(child: 'dateProchaineManoeuvrabilite', type: TextType::class, options: [
                'required' => false,
                'label' => 'Date de prochaine manoeuvrabilité',
            ])
            ->add(child: 'periodiciteTarageReglage', type: TextType::class, options: [
                'required' => false,
                'label' => 'Périodicité de tarage',
            ])
            ->add(child: 'dateDerniereTarageReglage', type: TextType::class, options: [
                'required' => false,
                'label' => 'Date de dernière tarage',
            ])
            ->add(child: 'dateProchaineTarageReglage', type: TextType::class, options: [
                'required' => false,
                'label' => 'Date du prochain tarage',
            ])
            ->add(child: 'idEspDirecteur', type: EntityType::class, options: [
                'required' => false,
                'label' => 'ESP directeur',
                'class' => Esp::class,
                'choice_label' => fn (Esp $esp) => $esp->getRf() ?? '',
            ])
            ->add(child: 'idEspDirecteur', type: TextType::class, options: [
                'label' => 'ESP directeur (Nom modifiable update Entity Relation...)',
                'disabled' => $disableIdEspDirecteur,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AccessoireSecurite::class,
            'disable_id_esp_directeur' => false,
        ]);
    }
}
