<?php

namespace GeekHub\BlogBundle\Controller;

use GeekHub\BlogBundle\Form\Type\GuestBookType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GuestBookController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new GuestBookType());
        if($request->isMethod("POST")) {

            $form->handleRequest($request);
            if($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                $this->get('session')->getFlashBag()->add('notice','New message was added!');
                return $this->redirect($this->generateUrl('geek_hub_blog_guestbook'));
            }
        }

        $comments = $this->getDoctrine()->getRepository('GeekHubBlogBundle:GuestBook')->findAll();
        return array("form" => $form->createView(), "comments" => $comments);
    }

}
