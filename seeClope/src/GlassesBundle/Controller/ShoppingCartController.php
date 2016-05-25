<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use  Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Security\Acl\Exception\Exception;


class ShoppingCartController extends Controller
{
    public function showAction(Request $request)
    {
        return $this->render(
            'GlassesBundle:ShoppingCart:show_shopping_cart.html.twig'
        );
    }

    public function addItemAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $glasses = $em->getRepository('EntityBundle:Glasses')
            ->findOneById($id);


        $cookies = $request->cookies->all();
        $response = new Response('test');

        if(isset($brand))
        {
            unset($brand);
        }
        else
        {
            $brand = new Cookie('brand[0]', $glasses->getBrand());
            array_push($cookies, $response->headers->setCookie($brand));
        }

        if(isset($cookies['brand']))
        {
            var_dump('exist');
            $i = 0;

            if(count($cookies['brand']) == 1)
            {
                $i = 1;
            }

            if(count($cookies['brand']) > 1)
            {
                $i = count($cookies['brand']) +1;
            }

            var_dump($cookies['brand']);
        }
        else
        {
            var_dump('not exist');
            array_push($cookies, $response->headers->setCookie($brand));
            var_dump($cookies);
        }


       /* $response = new Response('test');
        $brand = new Cookie('brand['.$i.']', $glasses->getBrand());

        array_push($cookies, $response->headers->setCookie($brand));

        $response->sendHeaders();


        return $this->redirectToRoute('shopping_cart_show');*/
    }
}
