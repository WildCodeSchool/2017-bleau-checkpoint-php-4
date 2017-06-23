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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }



    /**
     * @Route("/", name="homepage")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Panier::class)->findAll();

        $produit = new  produit();
        $form = $this->createForm(PanierType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
        }



        return $this->render('default/index.html.twig', array(
        'produits' => $produits,
        'form' => $form->createView(),
        ));
    }

    public function listAction(Request $request)
    {
        $calculator = $this->container->get('AppBundle.calculator');

        

    }
}
