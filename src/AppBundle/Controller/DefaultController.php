<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use AppBundle\Service\serviceArticle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/service", name="serviceArticle")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serviceAction(ServiceArticle $serviceArticle)
    {
        $message = $serviceArticle->articleFunction();
        $this->addFlash('success', $message);

    }



    /**
     * @Route("/liste", name="listarticles")
     */
    /*public function listArticleAction()
    {
        $em = $this ->getDoctrine()->getManager();
        $articles = $em ->getRepository('AppBundle:Article')->findAll();

        return $this->render('default/article.html.twig', array(
            'article'=>$articles
        ));

    }*/


    /**
     * @Route("/article", name="article")
     */
    public function addArticleAction(Request $request)
    {
        $article = new Article();

        $form =$this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article');
        }
        return $this->render('default/article.html.twig', array (
            'form' => $form->createView()

        ));

    }
}
