<?php
/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 15/10/18
 * Time: 10:26
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class BT extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('summary', TextareaType::class)
            ->add('content', TextareaType::class)
            ->add('authorEmail', EmailType::class)
            ->add('publishedAt', DateTimeType::class)
            ->add('save', SubmitType::class, ['label' => 'Enviar'])
        ;
    }
}