<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
        $getData = $request->get('search');
        $brand = $getData['brand'];



        if(isset($brand))
        {
            $searchBrand = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findByBrand($brand);

            for($i = 0; $i < count($searchBrand); $i++) {
                var_dump($searchBrand[$i]->getBrand());
                var_dump($searchBrand[$i]->getColor());
            }
        }

    }
}
