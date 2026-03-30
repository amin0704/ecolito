<?php

namespace App\Form;

use App\Entity\Achats;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AchatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('smartphone')
            ->add('tablette')
            ->add('television')
            ->add('electromenager')
            ->add('veloMecanique')
            ->add('veloElectrique')
            ->add('achatEnLivraison')
            ->add('cosmetique')
            ->add('tshirt')
            ->add('chaussures')
            ->add('jean')
            ->add('manteau')
            ->add('veste')
            ->add('pantalon')
            ->add('pull')
            ->add('livre')
            ->add('journal')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('submit', SubmitType::class, ['label' => 'Valider']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Achats::class,
        ]);
    }
}
