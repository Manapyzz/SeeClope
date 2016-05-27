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

        $session = $this->container->get('session');

        var_dump($session->get('panier'));

        return $this->render(
            'GlassesBundle:ShoppingCart:show_shopping_cart.html.twig'
        );
    }

    public function addItemAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $glasses = $em->getRepository('EntityBundle:Glasses')
            ->findOneById($id);

        var_dump($glasses);

        $session = $this->container->get('session');

        if(!$session->has('panier'))
        {
            $panier = $session->get('panier');
            $session->replace(array('panier' => $panier." ".$glasses->getBrand()));
        }

        $panier = $session->get('panier');



        $session->set('panier', $panier);

        return $this->redirectToRoute('shopping_cart_show');
    }
}
