<?php

namespace GlassesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GlassesBundle\Form\Type\SellerType;
use EntityBundle\Entity\Glasses;

class SellerController extends Controller
{
    public function sellAction(Request $request)
    {
        // 1) build the form
        $glasses = new Glasses();
        $glasses->setUser($this->getUser());
        $form = $this->createForm(SellerType::class, $glasses);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($glasses);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->redirectToRoute('user_homepage');
        }

        return $this->render(
            'GlassesBundle:Seller:seller.html.twig',
            array('form' => $form->createView())
        );
    }
}
