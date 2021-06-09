<?php

namespace App\Form;

use App\Entity\Disc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class DiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('discTitle')
            ->add('discYear')
            ->add('discPicture', FileType::class, [
                'label' => 'Image d\'illustration',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/gif',
                            'image/jpeg',
                            'image/pjpeg',
                            'image/png',
                            'image/x-png',
                            'image/tiff',
                            'image/bmp',
                            'image/gif'
                        ],
                        'mimeTypesMessage' => 'Selectionnez un fichier image valide'
                    ])
                ]
            ])
            ->add('discLabel')
            ->add('discGenre')
            ->add('discPrice')
            ->add('artist');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
