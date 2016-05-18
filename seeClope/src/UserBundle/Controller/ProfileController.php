<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Type\EditProfileType;

class ProfileController extends Controller
{
    public function showAction($username)
    {
        $userProfile = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:User')
            ->findOneByUsername($username);

        if(!$userProfile){
            return $this->redirectToRoute('user_homepage');
        }

        return $this->render(
            'UserBundle:Profile:show_profile.html.twig', array(
                'profile' => $userProfile
            )
        );
    }

    public function editAction(Request $request){

        $user = $this->getUser();

        $form = $this->createForm(EditProfileType::class, $user);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('show_profile', array('username' => $this->getUser()->getUsername()));
        }

        return $this->render(
            'UserBundle:Profile:editProfile.html.twig', array(
                'form' => $form->createView()
            )
        );
    }
}