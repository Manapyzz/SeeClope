<?php

namespace UserBundle\Controller;


use EntityBundle\Entity\ProfileComment;
use UserBundle\Form\Type\ProfileCommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Type\EditProfileType;

class ProfileController extends Controller
{
    public function showAction($username, Request $request)
    {
        $userProfile = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:User')
            ->findOneByUsername($username);

        if(!$userProfile){
            return $this->redirectToRoute('user_homepage');
        }

        $comment = new ProfileComment();
        $comment->setUser($this->getUser());
        $comment->setProfileId($userProfile->getId());
        $form = $this->createForm(ProfileCommentType::class, $comment);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
        }

        $userComment = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:ProfileComment')
            ->findOneByProfileId($userProfile->getId());

        var_dump($userComment);

        return $this->render(
            'UserBundle:Profile:show_profile.html.twig', array(
                'profile' => $userProfile, 'commentForm' => $form->createView(), 'userComment' => $userComment
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