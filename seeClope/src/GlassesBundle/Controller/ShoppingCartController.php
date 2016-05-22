<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ShoppingCartController extends Controller
{
    public function showAction(Request $request)
    {
        $session = $request->getSession();

        if(!$session->has('shoppingcart'))
        {
            $session->set('shoppingcart', array());
        }

        var_dump($session->get('shoppingcart'));

        return $this->render(
            'GlassesBundle:ShoppingCart:show_shopping_cart.html.twig'
        );
    }

    public function addItemAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $glasses = $em->getRepository('EntityBundle:Glasses')
            ->find($id);

        $session = $request->getSession();

        if(!$session->has('shoppingcart'))
        {
            $session->set('shoppingcart', array());
        }

        $shoppingcart = $session->get('shoppingcart');

        $shoppingcart['brand'] = $glasses->getBrand();


        return $this->redirectToRoute('shopping_cart_show');
    }
}
