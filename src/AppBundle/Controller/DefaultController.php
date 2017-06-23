<?php

namespace AppBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function formulaireAction(Request $request){

        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('quantity', IntegerType::class, array(
                'attr' => array(
                    'min' =>  0,
                    'max' => 10
                )
            ))
            ->add('tva', NumberType::class, array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('price', NumberType::class, array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $tva = $form->getData()['tva'];
            $name = $form->getData()['name'];
            $quantity = $form->getData()['quantity'];
            $price = $form->getData()['price'];
            $amounts = $this->get('app.calculator')->calculate($tva, $quantity, $price);

            return $this->render('formulaire.html.twig', array(
                'form' => $form->createView(),
                'name' => $name,
                'amounts' => $amounts
            ));
        }

        return $this->render('formulaire.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
