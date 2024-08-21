<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\FileType;
=======
>>>>>>> 8588bb4 (user_insert_form)
=======
use Symfony\Component\Form\Extension\Core\Type\FileType;
>>>>>>> f1812c5 (uploadfiles_comments)
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('description')
            ->add('image')
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1812c5 (uploadfiles_comments)
            ->add('image', FileType::class, [
                // demande à symfony de ne pas gérer automatiquement le champs image, je prends la main
                'mapped' => false,
            ])
<<<<<<< HEAD
=======
>>>>>>> 8588bb4 (user_insert_form)
=======
>>>>>>> f1812c5 (uploadfiles_comments)
            ->add('isPublished')
            ->add('category', EntityType::class, [
                'class' => Category::class,
'choice_label' => 'id',
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
