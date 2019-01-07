<?php

namespace App\Controller;

use App\Entity\Task;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BtController extends AbstractController
{
    /**
     * @Route("/bt", name="bt")
     */
    public function index(Request $request)
    {
        $task = new Task();
        $number = random_int(0, 100);

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('personaFisica', TextType::class)
            ->add('nom', TextType::class)
            ->add('primerCognom', TextType::class)
            ->add('segonCognom', TextType::class)
            ->add('Dni', ChoiceType::class, array(
                'choices' => array(
                    'DNI' => false,
                    'NIE' => false,
                    'Passaport' => false,
                ),
            ))
            ->add('Id', TextType::class)
            ->add('mail', TextType::class)
            ->add('representant', TextType::class)
            ->add('titular', TextType::class)
            ->add('contacte', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            var_dump($task);
            //return $this->redirectToRoute('task_success');
        }

        return $this->render('bt/index.html.twig', array(
            'controller_name' => 'BtController '.$number,
            'form' => $form->createView(),
        ));
    }
}
