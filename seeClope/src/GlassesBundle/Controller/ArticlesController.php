<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GlassesBundle\Form\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
            $sql = 'SELECT p
                    FROM EntityBundle:Glasses p ';

            $parameters = array();

            $getData = $request->get('search');

            if($getData)
            {
                if($getData['sex'])
                {
                    $sql .= ' WHERE p.sex = :selectedsex ';
                    $parameters['selectedsex'] = $getData['sex'];
                }

                if($getData['brand'] == 'all')
                {
                    $sql .= '';
                }
                else
                {
                    $sql .= ' AND p.brand = :selectedbrand ';
                    $parameters['selectedbrand'] = $getData['brand'];
                }

                if($getData['leftcorrection'])
                {
                    $sql .= ' AND p.leftcorrection = :selectedleftcorrection';
                    $parameters['selectedleftcorrection'] = $getData['leftcorrection'];
                }

                if($getData['rightcorrection'])
                {
                    $sql .= ' AND p.rightcorrection = :selectedrightcorrection';
                    $parameters['selectedrightcorrection'] = $getData['rightcorrection'];
                }

                if($getData['glasstype'] == 'all')
                {
                    $sql .= '';
                }
                else
                {
                    $sql .= ' AND p.glasstype = :selectedglasstype ';
                    $parameters['selectedglasstype'] = $getData['glasstype'];
                }

                if($getData['color'] == 'all')
                {
                    $sql .= '';
                }
                else
                {
                    $sql .= ' AND p.color = :selectedcolor ';
                    $parameters['selectedcolor'] = $getData['color'];
                }

                if($getData['shape'] == 'all')
                {
                    $sql .= '';
                }
                else
                {
                    $sql .= ' AND p.shape = :selectedshape ';
                    $parameters['selectedshape'] = $getData['shape'];
                }

                if($getData['minPrice'])
                {
                    $sql .= ' AND p.price >= :selectedminPrice';
                    $parameters['selectedminPrice'] = $getData['minPrice'];
                }

                if($getData['maxPrice'])
                {
                    $sql .= ' AND p.price <= :selectedmaxPrice';
                    $parameters['selectedmaxPrice'] = $getData['maxPrice'];
                }
            }

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                $sql
            )->setParameters($parameters);

            $articles = $query->getResult();

            $jsonArray = array();

            for($i= 0; $i < count($articles); $i++)
            {
                $jsonArray['brand'][$i] = $articles[$i]->getBrand();
                $jsonArray['leftcorrection'][$i] = $articles[$i]->getLeftCorrection();
                $jsonArray['rightcorrection'][$i] = $articles[$i]->getRightCorrection();
                $jsonArray['glasstype'][$i] = $articles[$i]->getGlasstype();
                $jsonArray['sex'][$i] = $articles[$i]->getSex();
                $jsonArray['color'][$i] = $articles[$i]->getColor();
                $jsonArray['shape'][$i] = $articles[$i]->getShape();
            }

            return new Response(json_encode($jsonArray));
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
