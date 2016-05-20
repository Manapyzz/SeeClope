<?php
namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function homepageAction()
    {
        return $this->render('UserBundle:Homepage:homepage.html.twig');
    }

    public function searchAction()
    {
        return $this->render('UserBundle:Search:search.html.twig');
    }
}
