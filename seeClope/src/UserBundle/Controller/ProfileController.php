<?php

namespace UserBundle\Controller;


use EntityBundle\Entity\ProfileComment;
use UserBundle\Form\Type\ProfileCommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Type\EditProfileType;
use Symfony\Component\HttpFoundation\Response;

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

            $jsonArray = array();

            $jsonArray[0] = 'Rating: '.$request->get('profile_comment')['rating'];
            $jsonArray[1] = 'Review: '.$request->get('profile_comment')['review'];
            $jsonArray[2] = 'Posted By '. $this->getUser()->getUsername();

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new Response(json_encode($jsonArray));
        }

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM EntityBundle:ProfileComment p
            WHERE p.profileId = :profileId
            ORDER BY p.id DESC'
        )->setParameter('profileId', $userProfile->getId());

        $userComment = $query->getResult();

        $em = $this->getDoctrine()->getManager();
        $rating = $em->createQuery(
            'SELECT p.rating
            FROM EntityBundle:ProfileComment p'
        );

        $resultRating = $rating->getResult();

        $average = 0;

        for($i = 0; $i < count($resultRating); $i++)
        {
            $average += $resultRating[$i]['rating'];
        }

        $average = $average / count($resultRating);

        return $this->render(
            'UserBundle:Profile:show_profile.html.twig', array(
                'profile' => $userProfile, 'commentForm' => $form->createView(), 'userComment' => $userComment, 'average' => $average
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