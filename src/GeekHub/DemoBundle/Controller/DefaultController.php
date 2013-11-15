<?php

namespace GeekHub\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $comments = $this->getDoctrine()->getRepository('GeekHubDemoBundle:Comment')->findBy(array('author' => 2));

        return $this->render('GeekHubDemoBundle:Default:index.html.twig', array('comments' => $comments));
    }
}
