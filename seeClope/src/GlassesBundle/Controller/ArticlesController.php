<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GlassesBundle\Form\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;


class ArticlesController extends Controller
{
    public function showAction(Request $request)
    {
        $articles = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findAll();

        $form = $this->createForm(SearchType::class, $articles);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $getData = $request->get('search');

            if($getData['brand'])
            {
                if($getData['brand'] === 'all')
                {
                    $articles = $this->getDoctrine()->getManager()
                        ->getRepository('EntityBundle:Glasses')
                        ->findAll();
                } else
                {
                    $articles = $this->getDoctrine()->getManager()
                        ->getRepository('EntityBundle:Glasses')
                        ->findByBrand($getData['brand']);
                }
            }

            var_dump($articles);
        }
        

        return $this->render(
            'GlassesBundle:Articles:show_articles.html.twig', array(
                'articles' => $articles, 'searchForm' => $form->createView()
            )
        );
    }

    public function onePageAction($glassesId)
    {
        $article = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findOneById($glassesId);

        return $this->render(
            'GlassesBundle:Articles:one_page_article.html.twig', array(
                'article' => $article
            )
        );
    }
}
