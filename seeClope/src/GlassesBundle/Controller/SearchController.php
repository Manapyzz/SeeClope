<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
        $bloublou = $request->get('search');
        $roger = $bloublou['searchField'];

        $articles = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findOneByBrand($roger);

        var_dump($articles->getBrand());
        
        return new Response('fjiapjzfoa');
    }
}
