<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use UserBundle\Form\Type\UserType;
use UserBundle\Form\Type\EditProfileAdminType;
use EntityBundle\Entity\User;
use EntityBundle\Entity\Glasses;
use GlassesBundle\Form\Type\SellerType;


class AdminController extends Controller
{
    public function mainAction()
    {
        return $this->render(
            'UserBundle:Admin:admin_dashboard.html.twig'
        );
    }

    public function usersAction()
    {
        $users = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:User')
            ->findAll();

        return $this->render(
            'UserBundle:Admin:admin_user.html.twig', array(
                'users' => $users
            )
        );
    }

    public function offersAction()
    {
        $glasses = $this->getDoctrine()->getManager()
            ->getRepository('EntityBundle:Glasses')
            ->findAll();



        return $this->render(
            'UserBundle:Admin:admin_offers.html.twig', array(
                'offers' => $glasses
            )
        );
    }

    public function addUserAction(Request $request)
    {
        $user = new User();
        $user->setImageName('DefaultImage.png');
        $user->setImageFile();
        $user->setRoles('ROLE_USER');
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_dashboard_user');
        }

        return $this->render(
            'UserBundle:Admin:admin_user_add.html.twig', array(
                'form' => $form->createView()
            )
        );
    }

    public function editUserAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('EntityBundle:User')
            ->find($id);

        $form = $this->createForm(EditProfileAdminType::class, $user);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_dashboard_user');
        }

        return $this->render(
            'UserBundle:Admin:admin_user_editProfile.html.twig', array(
                'form' => $form->createView()
            )
        );
    }

    public function deleteUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('EntityBundle:User')
            ->find($id);

        $em->remove($user);
        $em->flush();

        return new Response('User Well Deleted');
    }
    
    public function addArticleAction(Request $request)
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
            return $this->redirectToRoute('admin_dashboard_offer');
        }

        return $this->render(
            'UserBundle:Admin:admin_offers_add.html.twig',
            array('form' => $form->createView())
        );
    }

    public function editArticleAction(Request $request, $id)
    {
        // 1) build the form
        $em = $this->getDoctrine()->getManager();
        $glasses = $em->getRepository('EntityBundle:Glasses')
            ->find($id);
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
            return $this->redirectToRoute('admin_dashboard_offer');
        }

        return $this->render(
            'UserBundle:Admin:admin_offers_edit.html.twig',
            array('form' => $form->createView())
        );
    }

    public function deleteArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $glasses = $em->getRepository('EntityBundle:Glasses')
            ->find($id);

        $em->remove($glasses);
        $em->flush();

        return new Response('Article Well Deleted');
    }
}