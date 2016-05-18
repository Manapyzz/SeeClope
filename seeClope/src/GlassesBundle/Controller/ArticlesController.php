<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GlassesBundle\Form\Type\SearchType;

class ArticlesController extends Controller
{
    public function showAction()
    {
        $articles = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findAll();

        $searchForm = $this->createForm(SearchType::class);

        return $this->render(
            'GlassesBundle:Articles:show_articles.html.twig', array(
                'articles' => $articles, 'searchForm' => $searchForm->createView()
            )
        );
    }
}
