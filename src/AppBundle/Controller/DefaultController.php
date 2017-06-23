<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Prod;
use AppBundle\Form\FormType;
use AppBundle\Form\ProdType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Calculator;


class DefaultController extends Controller
{
    /**
     * @param Calculator $calculator
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     * @route ("/prod", name="prod")
     */
    public function indexAction(Calculator $calculator, Request $request)
    {
        $prod = new Prod();
        $form = $this->createForm(ProdType::class, $prod);
        $form->handleRequest($request);

        if($request->isXmlHttpRequest()) {
            $prix = $prod->getPrix();
            $tva = $calculator->tva(20, $prix);

            $result = array('tva' => $tva);
            $response = new JsonResponse($result);

            return $response;
        }

        return $this->render('@App/prod.html.twig', array(
            'form'=>$form->createView(),
        ));
    }
}
