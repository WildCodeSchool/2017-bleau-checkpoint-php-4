<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Panier;
use AppBundle\Form\PanierFormType;
use AppBundle\Services\CalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/result", name="homepage_result")
     * @Method({"GET", "POST"})
     *
     * @param Request $request
     * @param CalculatorService $calculator
     * @return mixed
     */
    public function indexAction(Request $request, CalculatorService $calculator)
    {
    	$panier = new Panier();
    	$form = $this->createForm(PanierFormType::class, $panier);
		$form->handleRequest($request);

		// $request->isMethod('post');
	    if ($form->isSubmitted() && $form->isValid())
	    {
	    	$result = $calculator->calculate($panier);

		    return $this->render('@App/result.html.twig', array(
			    'form' => $form->createView(),
			    'result' => $result
		    ));
	    }

        return $this->render('@App/result.html.twig', array(
        	'form' => $form->createView()
        ));
    }
}
