<?php

namespace App\Form;

use App\Entity\Disc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Regex;

class DiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('discTitle', TextType::class, [
                'label' => 'Titre du disque',
                'help' => 'Indiquez le titre complet du disque',
                'attr' => [
                    'placeholder' => 'titre du disque',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/[^<\/`\'"\>#]/',
                        'message' => 'Caractère(s) non valide(s)'
                    ]),
                ]
            ])
            ->add('discYear', IntegerType::class, [
                'label' => 'Année de sortie du disque',
                'help' => 'Indiquez l\'année de sortie du disque (4 chiffres s\'il vous plait ne mettez pas de lettre parce que ma regex elle marche plus)',
                'attr' => [
                    'placeholder' => 'Exemple : 1990'
                ],
                'constraints' => [
                    new Regex([
                    'pattern'=>'#[0-9]{4}#',
                       'match'=>false,
                        'message' => 'Caractère(s) non valide(s)'
                    ]),
                ]
            ])
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
            ->add('discLabel',TextType::class, [
        'label' => 'Titre du disque',
        'help' => 'Indiquez le titre complet du disque',
        'attr' => [
            'placeholder' => 'titre du disque',
        ],
        'constraints' => [
            new Regex([
                'pattern' => '/[^<\/`\'"\>#]/',
                'message' => 'Caractère(s) non valide(s)'
            ]),
        ]
    ])
            ->add('discGenre',TextType::class, [
        'label' => 'Titre du disque',
        'help' => 'Indiquez le titre complet du disque',
        'attr' => [
            'placeholder' => 'titre du disque',
        ],
        'constraints' => [
            new Regex([
                'pattern' => '/[^<\/`\'"\>#]/',
                'message' => 'Caractère(s) non valide(s)'
            ]),
        ]
    ])
            ->add('discPrice',MoneyType::class, [
        'label' => 'Prix du disque',
        'help' => 'Indiquez le prix du disque et pas de lettre svp jsais pas si ça marche ici',
        'attr' => [
            'placeholder' => 'exemple : 19.99',
        ],
        'constraints' => [
            new Regex([
                'pattern' => '/[^<\/`\'"\>#]/',
                'message' => 'Caractère(s) non valide(s)'
            ]),
        ]
    ])
            ->add('artist');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
