<?php

namespace GeekHub\DemoBundle\Controller;

use GeekHub\DemoBundle\Form\Model\Contact;
use GeekHub\DemoBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request)
    {

//        $contact = new Contact();
//        $contact->setEmail("test@email.com");
//        $contact->setMessage("Some test message");
//
//        $form = $this->createForm(new ContactType(), $contact);
        $form = $this->createForm(new ContactType());

        if($request->isMethod("POST")) {

            $form->handleRequest($request);
            if($form->isValid()) {

                echo("<pre>"); var_dump($form->getData()); exit;

                $this->get('session')->getFlashBag()->add('notice','Message was sent!');
                return $this->redirect($this->generateUrl('geek_hub_demo_homepage'));
            }

        }


        return array("form" => $form->createView());
    }
}
