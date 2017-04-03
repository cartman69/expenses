<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Expense\Type;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class TypeDepenseController extends Controller
{
    /**
     * @Route("/typedepense/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:TypeDepense:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/typedepense/create")
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
            echo "Ici!!!";
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $expenseType = $form->getData();
            dump($expenseType);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($expenseType);
            $em->flush();

            //return $this->redirectToRoute('task_success');
        }
        echo "Après putain de merde!!!";

        return $this->render('AppBundle:TypeDepense:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
