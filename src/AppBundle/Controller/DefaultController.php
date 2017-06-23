<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Panier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $panier = new Panier();
        $form = $this->createForm('AppBundle\Form\PanierType', $panier);

        $form->handleRequest($request);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'form' => $form,
        ));
    }
}
