<?php

namespace App\Form;

use App\Entity\Betaal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BetaalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datum',DateType::class, [
                'widget' => 'single_text'
    ])
            ->add('bank', ChoiceType::class, [
                'choices'  => [
                'placeholder' => false,
                'ING' => 'ING',
                'ABN AMRO' => 'ABN AMRO',
                'SNS BANK' => 'SNS BANK',
                'RABO BANK' => 'RABO BANK',
                'KNAB' => 'KNAB',
    ]
])
            ->add('bedrag')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Betaal::class,
        ]);
    }
}
