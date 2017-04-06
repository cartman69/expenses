<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expense\Type;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ExpenseTypeController extends Controller
{
    /**
     * @Route("/expensetype/list")
     */
    public function listAction()
    {
        $expenseTypes = $this->getDoctrine()
            ->getRepository('AppBundle:Expense\Type')
            ->findAll();

        return $this->render('AppBundle:ExpenseType:list.html.twig', array(
            'expenseTypes' => $expenseTypes
        ));
    }

    /**
     * @Route("/expensetype/create", name="expenseTypeCreate")
     */
    public function createAction(Request $request)
    {
        $expenseType = new Type();
        $expenseType->setName('Name of this type');
        $expenseType->setCode('Code of this type');

        $form = $this->createFormBuilder($expenseType)
            ->add('name', TextType::class)
            ->add('code', TextType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class, ['label' => 'Create a type'] )

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $expenseType = $form->getData();
            dump($expenseType);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($expenseType);
            $em->flush();
            return $this->listAction();
        }

        return $this->render('AppBundle:ExpenseType:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
